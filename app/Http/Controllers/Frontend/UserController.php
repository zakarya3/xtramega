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

class UserController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $count = Cart::where('user_id',Auth::id())->get()->count();
        $cartitems = Cart::where('user_id',Auth::id())->get();
        $orders = Order::where('user_id', Auth::id())->get();
        return view('orders',compact('category','cartitems','count','orders'));
    }
    public function view($id)
    {
        $category = Category::all();
        $count = Cart::where('user_id',Auth::id())->get()->count();
        $cartitems = Cart::where('user_id',Auth::id())->get();
        $orders = Order::where('id',$id)->where('user_id', Auth::id())->first();
        return view('view',compact('category','cartitems','count','orders'));
    }
}
