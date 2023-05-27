<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Cart;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartItems = Cart::where('user_id',Auth::user()->id)->get();
        $totalPrice = 0;
        $totalPriceWithTax = 0;
        foreach ($cartItems as $item):
            $totalPrice += $item->property->low_price;
        endforeach;
        $totalPriceWithTax = $totalPrice + $totalPrice*0.18;

        return view('home.cart.index',[
            'cartItems' => $cartItems,
            'totalPrice' => $totalPrice,
            'totalPriceWithTax' => $totalPriceWithTax
        ]);
    }

    public function checkout()
    {


        return view('home.cart.checkout');
    }

    public function address_store()
    {
        return view('home.cart.address');
    }


    public function cart_store(Request $req)
    {
        $cartItem = new Cart();
        $cartItem->property_id = $req->property_id;
        $cartItem->user_id = auth()->user()->id;
        $cartItem->save();

        return redirect()->back()->with("success","Added to Cart!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function cart_delete(Request $req)
    {
        $cartItem = Cart::find($req->cart_item_id);
        $cartItem->delete();
        return redirect()->back()->with("success","Item deleted successfully!");
    }
}
