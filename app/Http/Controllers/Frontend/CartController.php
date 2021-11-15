<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Category;


class CartController extends Controller
{
    public function addProduct(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');


        if (Auth::check()) {
            $prod_check = Product::where('id',$product_id)->first();
            if ($prod_check) {
                if (Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->exists()) {
                    return response()->json(['status' => $prod_check->product_name." Already Added to cart"]);
                }
                else {
                    $cartItem = new Cart();
                    $cartItem->prod_id = $product_id;
                    $cartItem->user_id = Auth::id();
                    $cartItem->prod_qty = $product_qty;
                    $cartItem->save();
                    return response()->json(['status' => $prod_check->product_name." Added to cart"]);
                }
            }
        }
        else {
            return view('auth.login');
        }
    }

    public function viewcart()
    {
        $category = Category::all();
        $cartitems = Cart::where('user_id', Auth::id())->get();
        $count = Cart::where('user_id',Auth::id())->get()->count();
        return view('cart',compact('category', 'cartitems','count'));
        return view('layouts.header',compact('cartitems','count'));
    }

    public function deleteProduct(Request $request)
    {
        if (Auth::check()) {
            $prod_id = $request->input('prod_id');
            if (Cart::where('prod_id',$prod_id)->where('user_id',Auth::id())->exists()) {
                $cartItem = Cart::where('prod_id',$prod_id)->where('user_id',Auth::id())->first();
                $cartItem->delete();
                return response()->json(['status' => "Product deleted successfully"]);
            }
        }
        else {
            return view('auth.login');
        }
    }
}
