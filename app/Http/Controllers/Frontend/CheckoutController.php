<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;

class CheckoutController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $old_cartitems = Cart::where('user_id', Auth::id())->get();
        $count = Cart::where('user_id',Auth::id())->get()->count();
        foreach ($old_cartitems as $item) {
            if (!Product::where('id',$item->prod_id)->where('qty','>=',$item->prod_qty)->exists()) {
                $removeItem = Cart::where('user_id',Auth::id())->where('prod_id',$item->prod_id)->first();
                $removeItem->delete();
            }
        }
        $cartitems = Cart::where('user_id',Auth::id())->get();
        return view('checkout',compact('category','cartitems','count'));
        
    }
    public function placeorder(Request $request)
    {
        $category = Category::all();
        $count = Cart::where('user_id',Auth::id())->get()->count();
        $order = new Order();
        $order->user_id = Auth::id();
        $total = 0;
        $cartitems_total = Cart::where('user_id', Auth::id())->get();
        foreach ($cartitems_total as $prod) {
            $total += $prod->product->price;
        }
        $order->total_price = $total;
        $order->fname = $request->input('fname');
        $order->lname = $request->input('lname');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->address = $request->input('address');
        $order->country = $request->input('country');
        $order->tracking_no = 'Xtra'.rand(1111,9999);
        $order->save();
        $cartitems= Cart::where('user_id',Auth::id())->get();
        foreach ($cartitems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'prod_id' => $item->prod_id,
                'qty' => $item->prod_qty,
                'price' => $item->product->price,
            ]);
            $prod = Product::where('id',$item->prod_id)->first();
            $prod->qty = $prod->qty - $item->prod_qty;
            $prod->update();
        }
        if (Auth::user()->address == NULL) {
            $user = User::where('id', Auth::id())->first();
            $user->fname = $request->input('fname');
            $user->lname = $request->input('lname');
            $user->email = $request->input('email');
            $user->phone = $request->input('phone');
            $user->address = $request->input('address');
            $user->country = $request->input('country');
            $user->update();
        }
        Cart::destroy($cartitems);
        return view('checkout-payment',compact('category','cartitems','count'));
    }
    public function index_pay(Type $var = null)
    {
        $category = Category::all();
        $count = Cart::where('user_id',Auth::id())->get()->count();
        $cartitems = Cart::where('user_id',Auth::id())->get();
        return view('checkout-payment',compact('category','cartitems','count'));
    }
    public function index_comp(Type $var = null)
    {
        $category = Category::all();
        $count = Cart::where('user_id',Auth::id())->get()->count();
        $cartitems = Cart::where('user_id',Auth::id())->get();
        return view('checkout-complete',compact('category','cartitems','count'));
    }
}
