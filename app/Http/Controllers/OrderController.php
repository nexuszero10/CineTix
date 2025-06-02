<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;

class OrderController extends Controller
{
    public function __construct()
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.sanitized');
        Config::$is3ds = config('midtrans.3ds');
    }

    public function createTransaction(Request $request)
    {
        return $request->all();
        $orderId = 'ORD' . uniqid();
        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => (int) $request->input('subTotalFinal'),
            ],

            'item_details' => [
                [
                    'id' => 'seat',
                    'price' => 50000,
                    'quantity' => 5,
                    'name' => 'Seat Booking'
                ],
                [
                    'id' => 'snack-1',
                    'price' => 15000,
                    'quantity' => 2,
                    'name' => 'Popcorn'
                ],
            ],

            'customer_details' => [
                'first_name' => 'Nama',
                'email' => 'email@example.com',
                'phone' => '08123456789',
            ],
        ];

        $snapToken = Snap::getSnapToken($params);

        return view('payment.checkout', compact('snapToken'));
    }
}
