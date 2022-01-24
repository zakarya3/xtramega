<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;

class CartPController extends Controller
{
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('cart', compact('cartItems'));
    }

    public function addToCart(Request $request)
    {
        $qty = $request->input('quantity');
        if ($qty==0) {
            $qty++;
        }
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $qty,
            'attributes' => array(
                'image' => $request->image,
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }

    public function addUser(Request $request)
    {
        $cartItems = \Cart::getContent();
        $name = $request->userName;
        $phone = $request->phone;
        $email = $request->email;
        $address = $request->address;
        $total = $request->total;
        if (!User::where('name',$name)->exists()) {
            $user = new User();
            $user->name = $name;
            $user->email = $email;
            $user->phone = $phone;
            $user->address = $address;
            $user->save();
        }
        $user_ex = User::where('name',$name)->first();
        $order = new Order();
        $order->user_id = $user_ex->id;
        $order->total_price = $total;
        $order->email = $email;
        $order->phone = $phone;
        $order->address = $address;
        $order->tracking_no = 'Xtra'.rand(1111,9999);
        $order->save();
        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'prod_id' => $item->id,
                'qty' => $item->quantity,
                'price' => $item->price,
            ]);
            $prod = Product::where('id',$item->id)->first();
            $prod->qty = $prod->qty - $item->quantity;
            $prod->update();
        }

        Session::put('name',$name);
        Session::put('phone',$phone);
        Session::put('email',$email);
        Session::put('address',$address);
        return view('checkout-payment', compact('cartItems','total'));
    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }


    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }

}
