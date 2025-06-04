<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use Illuminate\Support\Facades\Auth;
use App\Models\Movie;
use App\Models\Order;
use App\Models\Snack;
use App\Models\Promotion;
use App\Models\Ticket;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function createTransaction(Request $request)
    {
        // Midtrans config
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $user = Auth::user();

        // Cek di session apakah sudah ada order sebelumnya
        if (Session::has('order_id')) {
            $orderId = Session::get('order_id');
            $order = Order::with(['snacks', 'tickets.schedule.movie'])->find($orderId);

            // Jika order ketemu, gunakan order dan params dari session untuk generate snapToken dan return view
            if ($order) {
                $params = Session::get('midtrans_params');
                $snapToken = Snap::getSnapToken($params);

                return view('CineTix.checkout', [
                    'snapToken' => $snapToken,
                    'order' => $order,
                    'order_snacks' => $order->snacks,
                    'order_tickets' => $order->tickets,
                    'params' => $params,
                    'customerName' => $user->name,
                    'customerEmail' => $user->email,
                    'discountAmount' => $request->input('inputDiscountAmount', 0),
                ]);
            }

            // Kalau order gak ketemu, hapus session supaya buat baru
            Session::forget('order_id');
            Session::forget('midtrans_params');
        }

        $itemDetails = [];

        // Ambil film
        $movie = Movie::findOrFail($request->input('inputMovieId'));
        $numberOfSeats = (int) $request->input('inputNumberOfSeats');
        $selectedSeats = $request->input('inputSelectedSeats', []);

        $itemDetails[] = [
            'id' => 'movie-' . $movie->id,
            'name' => $movie->title,
            'price' => $movie->price,
            'quantity' => $numberOfSeats,
        ];

        // Snack
        $snackIds = $request->input('inputSnackIds', []);
        $snackQuantities = $request->input('inputSnackQuantities', []);
        $snackData = [];

        foreach ($snackIds as $index => $snackId) {
            $quantity = (int) ($snackQuantities[$index] ?? 0);
            if ($quantity > 0) {
                $snack = Snack::find($snackId);
                if ($snack) {
                    $itemDetails[] = [
                        'id' => 'snack-' . $snack->id,
                        'name' => $snack->name,
                        'type' => $snack->category,
                        'price' => $snack->price,
                        'quantity' => $quantity,
                    ];
                    $snackData[$snack->id] = ['quantity' => $quantity];
                }
            }
        }

        // Promo
        $promotionId = $request->input('inputCouponId');
        $discountAmount = (int) $request->input('inputDiscountAmount');
        if ($promotionId && $discountAmount > 0) {
            $promotion = Promotion::find($promotionId);
            if ($promotion) {
                $itemDetails[] = [
                    'id' => 'promotion-' . $promotion->id,
                    'name' => 'Kode promo: ' . $promotion->code,
                    'price' => -$discountAmount,
                    'quantity' => 1,
                ];
            }
        }

        $totalPrice = (int) $request->input('inputSubTotalFinal');
        $orderNumber = 'ORD' . strtoupper(uniqid());

        $orderData = [
            'user_id' => $user->id,
            'schedule_id' => $request->input('inputScheduleId'),
            'order_number' => $orderNumber,
            'number_of_seats' => $numberOfSeats,
            'total_price' => $totalPrice,
            'promotion_id' => $promotionId,
            'status' => 'unpaid',
        ];

        $ticketData = [];
        foreach ($selectedSeats as $seat) {
            $row_seat = strtoupper(substr($seat, 0, 1));
            $row_number = (int) substr($seat, 1);       
            $ticketData[] = [
                'user_id' => $user->id,
                'schedule_id' => $request->input('inputScheduleId'),
                'row_seat' => $row_seat,
                'row_number' => $row_number,
            ];
        }

        $params = [
            'transaction_details' => [
                'order_id' => $orderNumber,
                'gross_amount' => $totalPrice,
            ],
            'item_details' => $itemDetails,
            'customer_details' => [
                'first_name' => $user->name,
                'email' => $user->email,
            ],
        ];

        // Insert order
        $order = Order::create($orderData);

        // Insert order_snack
        if (!empty($snackData)) {
            $order->snacks()->attach($snackData);
        }

        // Insert tickets
        $tickets = [];
        foreach ($ticketData as $ticket) {
            $tickets[] = new Ticket($ticket);
        }
        $order->tickets()->saveMany($tickets);

        // Simpan order_id dan params ke session supaya bisa dicek saat refresh
        Session::put('order_id', $order->id);
        Session::put('midtrans_params', $params);

        $snapToken = Snap::getSnapToken($params);

        return view('CineTix.checkout', [
            'snapToken' => $snapToken,
            'order' => $order,
            'order_snacks' => $order->snacks,
            'order_tickets' => $order->tickets,
            'params' => $params,
            'customerName' => $user->name,
            'customerEmail' => $user->email,
            'discountAmount' => $discountAmount,
        ]);
    }

    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash('sha512', $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

        if ($hashed === $request->signature_key) {
            if (in_array($request->transaction_status, ['capture', 'settlement'])) {
                $order = Order::where('order_number', $request->order_id)->first();
                if ($order) {
                    $order->update(['status' => 'paid']);
                    
                }
            }
        }
    }
}
