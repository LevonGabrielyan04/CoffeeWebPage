<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Illuminate\Support\Facades\Auth;

use function Pest\Laravel\delete;

class PaymentController extends Controller
{
    public function checkout()
    {
        return view('payment.checkout');
    }

    public function payment(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        if($request->user_id){
            $products = User::find($request->user_id)->cardProducts()->get();

            if($products->isEmpty())
                return redirect()->back();

            $lineItems = [];

            foreach ($products as $product) {
                $lineItems[] = [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => $product->name,
                        ],
                        'unit_amount' => $product->price * 100,
                    ],
                    'quantity' => $product->pivot->quantity,
                ];
            }

            
            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => $lineItems,
                'mode' => 'payment',
                'success_url' => route('success'),
                'cancel_url' => route('cancel'),
                'metadata' => [
                    'user_id' => Auth::id(),
                    'user_email' => Auth::user()->email,
                    'product_count' => $products->count(),
                ],
            ]);

            
            return redirect()->away($session->url);
        }

        $count = $request->quantity;
        $productId = $request->id;
        $product = Product::find($productId);

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $product->name,
                    ],
                    'unit_amount' => $product->price * 100,
                ],
                'quantity' => $count,
            ]],
            'mode' => 'payment',
            'success_url' => route('success', ['product_id' => $productId]),
            'cancel_url' => route('cancel'),
            'metadata' => [
                'user_id' => Auth::id(),
                'user_email' => Auth::user()->email,
                'product_name' => $product->name,
                'quantity' => $count,
            ],
        
        ]);

        return redirect()->away($session->url);
    }

    public function success(Request $request)
    {
        if($request->product_id)
            Card::where(['user_id' => Auth::id(),'product_id' => $request->product_id])->delete();
        else{
            Card::where(['user_id' => Auth::id()])->delete();
        }
        return view('payment.success');
    }

    public function cancel()
    {
        return view('payment.cancel');
    }
}