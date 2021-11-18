<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Models\Category;
use Notification;
use App\Notifications\SendEmailNotification;
use App\Models\Order;
use App\Models\OrderItem;

class CheckoutController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $old_cartitems = Cart::where('user_id', Auth::id())->get();
        $count = Cart::where('user_id',Auth::id())->get()->count();
        $cartitems = Cart::where('user_id',Auth::id())->get();
       if ($cartitems->isNotEmpty()) {
         return view('checkout',compact('category','cartitems','count'));
       }
       else {
        return redirect('/cart')->with('status'," Votre panier est vide!!!");
       }
        
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
            $total += $prod->product->price * $prod->prod_qty;
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
        return view('checkout-payment',compact('category','cartitems','count','total','order'));
    }
    public function paymentmethod(Request $request, $id)
    {
        $category = Category::all();
        $count = Cart::where('user_id',Auth::id())->get()->count();
        $cartitems = Cart::where('user_id',Auth::id())->get();
        $orders = Order::find($id);
        $orders->choice = $request->input('order_choice');

        $user = User::where('id', Auth::id())->first();
        if ($orders->choice == "0") {
            $details = [
                'greeting' => 'Bonjour '.$user->name.', Merci d avoir effectué vos achats sur Xtramega Maroc!',
                'body' => 'Identifiant de commande '.$orders->tracking_no.' - En attente de paiement',
                'body1' => 'Votre commande ayant pour référence '.$orders->tracking_no.' a bien été prise en compte, elle sera expédiée dès réception de votre paiement.',
                'body2' => 'Moyen de paiement : Payer par virement bancaire',
                'body3' => 'Vous avez choisi de régler par virement bancaire. Voici les informations requises pour votre virement :',
                'body4' => 'Montant : '.$orders->total_price.' DH/TTC',
                'body5' => 'Titulaire du compte : logicatel',
                'body6' => 'Détails du compte : 022010000276001001685825',
                'body7' => 'Adresse de la banque : Société général à Agadir',
                'actiontext' => 'Plus de détails',
                'actionurl' => 'http://127.0.0.1:8000/view-order/'.$orders->id,
                'lastline' => 'Veuillez préciser votre numéro de commande dans la description du virement.',
            ];
        }
        elseif ($orders->choice == "1") {
            $details = [
                'greeting' => 'Bonjour '.$user->name.', Merci d avoir effectué vos achats sur Xtramega Maroc!',
                'body' => 'Identifiant de commande '.$orders->tracking_no.' - En attente de paiement',
                'body1' => 'Votre commande ayant pour référence '.$orders->tracking_no.' a bien été prise en compte, elle sera expédiée dès réception de votre paiement.',
                'body2' => 'Moyen de paiement : Payer par virement bancaire',
                'body3' => 'Vous avez choisi de régler par virement bancaire. Voici les informations requises pour votre virement :',
                'body4' => 'Montant : '.$orders->total_price.' DH/TTC',
                'body5' => 'Titulaire du compte : logicatel',
                'body6' => 'Détails du compte : 022010000276001001685825',
                'body7' => 'Adresse de la banque : Société général à Agadir',
                'actiontext' => 'Plus de détails',
                'actionurl' => 'http://127.0.0.1:8000/view-order/'.$orders->id,
                'lastline' => 'Veuillez préciser votre numéro de commande dans la description du virement.',
            ];
        }
        elseif ($orders->choice == "2") {
            $details = [
                'greeting' => 'Bonjour '.$user->name.', Merci d avoir effectué vos achats sur Xtramega Maroc!',
                'body' => 'Identifiant de commande '.$orders->tracking_no,
                'body1' => 'Votre commande ayant pour référence '.$orders->tracking_no.' a bien été prise en compte. Vous payez lors de la livraison de votre commande.',
                'body2' => 'Moyen de paiement : Payer comptant à la livraison',
                'body3' => 'Nous vous contacterons bientôt',
                'body4' => '',
                'body5' => '',
                'body6' => '',
                'body7' => '',
                'actiontext' => 'Plus de détails',
                'actionurl' => 'http://127.0.0.1:8000/view-order/'.$orders->id,
                'lastline' => 'Xtramega vous remercie!!',
            ];
        }
        $admin = User::where('role_as','1')->first();
        $details_admin=[
            'greeting' => 'Bonjour '.$admin->name.', vous avez une commande',
            'body' => 'Identifiant de commande '.$orders->tracking_no,
            'body1' => 'Nom et prénom : '.$user->fname.' '.$user->lname,
            'body2' => 'Email : '.$user->email,
            'body3' => 'Téléphone : '.$user->phone,
            'body4' => 'Adresse : '.$user->address,
            'body5' => 'Pays : '.$user->country,
            'body6' => '',
            'body7' => '',
            'actiontext' => 'Plus de détails',
            'actionurl' => 'http://127.0.0.1:8000/admin/view-order/'.$orders->id,
            'lastline' => 'Xtramega vous remercie!!',
        ];


        Notification::send($user, new SendEmailNotification($details));
        Notification::send($admin, new SendEmailNotification($details_admin));


        $orders->update();
        return view('checkout-complete',compact('category','cartitems','count','orders'));
    }
    public function index_pay()
    {
        $category = Category::all();
        $count = Cart::where('user_id',Auth::id())->get()->count();
        $cartitems = Cart::where('user_id',Auth::id())->get();
        return view('checkout-payment',compact('category','cartitems','count'));
    }
    public function index_comp()
    {
        $category = Category::all();
        $count = Cart::where('user_id',Auth::id())->get()->count();
        $cartitems = Cart::where('user_id',Auth::id())->get();
        return view('checkout-complete',compact('category','cartitems','count'));
    }
}
