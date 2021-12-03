<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $user = User::where('name',$request->session()->get('name'))->first();
        $orders = Order::where('user_id',$user->id)->get();      
        return view('orders',compact('orders'));
    }
    public function view(Request $request, $id)
    {
        $user = User::where('name',$request->session()->get('name'))->first();
        $userid = $user->id;
        $order = Order::where('id',$id)->where('user_id', $userid)->first();
        $orders = OrderItem::where('order_id',$order->id)->get();
        return view('view',compact('orders','user','order'));
    }
}
