<?php

namespace App\Http\Middleware;

use App\Models\Cart;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class UserCartMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $userCart = Cart::where('user_id', Auth::user()->id)->get();
            $totalPrice = $userCart->sum(function($userCartItem){
                return $userCartItem->property->low_price;
            });
            View::share('userCartTotalPrice',$totalPrice);
            View::share('userCart', $userCart);
        }
        return $next($request);
    }
}
