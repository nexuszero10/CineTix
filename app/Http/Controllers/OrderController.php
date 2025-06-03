<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use Illuminate\Support\Facades\Auth;
use App\Models\Movie;
use App\Models\Snack;
use App\Models\Promotion;

class OrderController extends Controller
{
    public function createTransaction(Request $request)
    {
        // Konfigurasi Midtrans
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $itemDetails = [];

        // Ambil data film
        $movie = Movie::findOrFail($request->input('inputMovieId'));

        // Tambahkan item kursi
        $itemDetails[] = [
            'id' => 'movie-' . $movie->id,
            'name' => $movie->title,
            'price' => $movie->price,
            'quantity' => (int) $request->input('inputNumberOfSeats'),
            'seats' => $request->input('inputSelectedSeats', []),
            'schedule' => 'schedule-' . $request->input('inputScheuleId')
        ];

        // Ambil snack jika ada
        $snackIds = $request->input('inputSnackIds', []);
        $snackQuantities = $request->input('inputSnackQuantities', []);

        if (is_array($snackIds) && is_array($snackQuantities)) {
            foreach ($snackIds as $index => $snackId) {
                if (isset($snackQuantities[$index])) {
                    $snack = Snack::find($snackId);
                    if ($snack) {
                        $itemDetails[] = [
                            'id' => 'snack-' . $snack->id,
                            'name' => $snack->name,
                            'price' => $snack->price,
                            'quantity' => (int) $snackQuantities[$index],
                        ];
                    }
                }
            }
        }

        // Tambahkan potongan promo jika ada
        $couponId = $request->input('inputCouponId');
        $discountAmount = (int) $request->input('inputDiscountAmount');

        if ($couponId && $discountAmount > 0) {
            $promotion = Promotion::find($couponId);
            if ($promotion) {
                $itemDetails[] = [
                    'id' => 'promotion-' . $promotion->id,
                    'name' => 'Kode promo: ' . $promotion->code,
                    'price' => -$discountAmount, // nilai diskon harus negatif
                    'quantity' => 1,
                ];
            }
        }

        // Total dan Snap token
        $orderId = 'ORD' . strtoupper(uniqid());
        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => (int) $request->input('inputSubTotalFinal'),
            ],
            'item_details' => $itemDetails,
            'customer_details' => [
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
            ],
        ];

        // Dapatkan Snap Token
        $snapToken = Snap::getSnapToken($params);

        // Kirim ke view checkout
        return view('CineTix.checkout', [
            'snapToken' => $snapToken,
            'params' => $params,
        ]);
    }
}
