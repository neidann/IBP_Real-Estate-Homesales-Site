<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view('admin.order.index',[
            'orders' => $orders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function order_success()
    {
        return view('home.cart.success');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {

        //create an emty order
        $order = new Order();
        do {
            $orderCode = strtoupper(Str::random(5));
        }while(Order::where('code',$orderCode)->exists());

        $order->user_id = Auth::user()->id;
        $order->total_price = 0;
        $order->code = $orderCode;
        $order->status = "CREATING";
        $order->save();

        //re-call the order
        $currentOrder = Order::where('user_id',Auth::user()->id)->where("status","CREATING")->first();

        $cartItems = Cart::where('user_id',Auth::user()->id)->get();

        //loop the cart Items
        $totalPrice = 0 ;
        foreach ($cartItems as $cartItem):
            $totalPrice += $cartItem->property->low_price;

            $newItem = new OrderItem();
            $newItem->order_id = $currentOrder->id;
            $newItem->user_id = Auth::user()->id;
            $newItem->price = $cartItem->property->low_price;
            $newItem->name =  $cartItem->property->title;
            $newItem->description = $cartItem->property->description;
            $newItem->address = $cartItem->property->address;
            $newItem->rooms =
                    " Sitting Rooms: " . $cartItem->property->sittingrooms .
                    " Bedrooms: "  . $cartItem->property->bedrooms .
                    " Baths:" . $cartItem->property->baths
            ;
            $newItem->position = $cartItem->property->position;
            $newItem->property_id = $cartItem->property_id;
            $newItem->save();
        endforeach;
        $currentOrder->status = "ACTIVE";
        $currentOrder->total_price =  ( $totalPrice + $totalPrice*0.18 );
        $currentOrder->save();

        //remove all cart items belongs to user
        Cart::where('user_id',Auth::user()->id)->delete();

        return redirect()->route('order.success')->with("success","Order Completed Gracefully!");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $order = Order::find($id);
        return view('profile.order-detail',[
            'order' => $order
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function admin_show($id)
    {
        $order = Order::find($id);
        return view('admin.order.show',[
            'order' => $order
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $order = Order::find($id);
        $order->status = "COMPLETED";
        $order->save();
        return redirect()->back()->with("success","Updated Successfully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        OrderItem::where('user_id',Auth::user()->id)->where('order_id',$id)->delete();
        return redirect()->route("admin.order.index")->with("success","DELETED GRACEFULLY!");
    }
}
