<?php

namespace App\Http\Controllers;

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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function cart_store(Request $req)
    {
        $cartItem = new Cart();
        $cartItem->property_id = $req->property_id;
        $cartItem->user_id = auth()->user()->id;
        $cartItem->save();

        return redirect()->back()->with("success","Added to Cart!");

    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
