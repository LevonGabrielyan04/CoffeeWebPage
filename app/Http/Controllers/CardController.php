<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CardController extends Controller
{
    public function index()
    {
        $products = Auth::user()->cardProducts;

        $products->map(function ($product) {
            if(strlen($product->description) > 100) {
                $product->description = mb_substr($product->description , 0, 100)."...";
            }
            return $product;
          });
        return view('card.card',compact('products'));
    }
    public function add_to_cart(Request $request)
    {
        $request->validate([
            'id_user' => 'required|numeric',
            'id_product' => 'required|numeric',
            'count' => 'required|numeric'
        ]);
        $card_item = new Card();

        $existingCartItem = Card::where([
            'user_id' => $request->id_user,
            'product_id' => $request->id_product
        ])->first();

        if($existingCartItem)
        {
            $existingCartItem->quantity += $request->count;
            $card_item = $existingCartItem;
        }
        else{
            $card_item->user_id = $request->id_user;
            $card_item->product_id = $request->id_product;
            $card_item->quantity = $request->count;
        }

        if($card_item->save())
        {
            return response()->json(['message' => 'Item(s) added to card']);
        }
        return response()->json(['message'=> 'Something went wrong, please try again later']);
    }

    public function delete_from_card(Request $request){
        $card_item = Card::where(['user_id' => Auth::id(),
                    'product_id' => $request->product_id])->firstOrFail();
        $card_item->delete();

        return redirect()->back();
    }

    public function ribbon()
    {
        $products = Auth::user()->cardProducts()->get();

        $total_price = 0;
        foreach($products as $product)
        {
            $total_price += $product->price * $product->pivot->quantity;
        }

        return view('ribbon',compact('products','total_price'))->render();
    }
}
