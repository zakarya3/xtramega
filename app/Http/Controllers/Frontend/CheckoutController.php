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
use Illuminate\Support\Facades\Session;
use App\Notifications\SendEmailNotification;
use App\Models\Order;
use App\Models\OrderItem;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        if (User::where('name',$request->session()->get('name'))->exists()) {
            $user = User::where('name',$request->session()->get('name'))->first();
        }else{
            $user=NULL;
        }
        return view('checkout', compact('cartItems','user'));
        
    }
    public function paymentmethod(Request $request)
    {
        $user = User::where('name',$request->session()->get('name'))->first();
        $order = Order::where('user_id',$user->id)->latest('created_at','desc')->first();
        if ($request->order_choice == "0") {
            $details = [
                'greeting' => 'Bonjour '.$user->name.', Merci d avoir effectué vos achats sur Xtramega Maroc!',
                'body' => 'Identifiant de commande '.$order->tracking_no.' - En attente de paiement',
                'body1' => 'Votre commande ayant pour référence '.$order->tracking_no.' a bien été prise en compte, elle sera expédiée dès réception de votre paiement.',
                'body2' => 'Moyen de paiement : Payer par virement bancaire',
                'body3' => 'Vous avez choisi de régler par virement bancaire. Voici les informations requises pour votre virement :',
                'body4' => 'Montant : '.$order->total_price.' DH/TTC',
                'body5' => 'Titulaire du compte : Xtramega',
                'body6' => 'Détails du compte : 007010000668500000024207',
                'body7' => 'Adresse de la banque : attijariwafa bank à Agadir',
                'actiontext' => 'Back to home',
                'actionurl' => 'http://127.0.0.1:8000/view-order/'.$order->id,
                'lastline' => 'Veuillez préciser votre numéro de commande dans la description du virement.',
            ];
        }
        elseif ($request->order_choice == "1") {
            $details = [
                'greeting' => 'Bonjour '.$user->name.', Merci d avoir effectué vos achats sur Xtramega Maroc!',
                'body' => 'Identifiant de commande '.$order->tracking_no.' - En attente de paiement',
                'body1' => 'Votre commande ayant pour référence '.$order->tracking_no.' a bien été prise en compte, elle sera expédiée dès réception de votre paiement.',
                'body2' => 'Moyen de paiement : Payer par virement bancaire',
                'body3' => 'Vous avez choisi de régler par virement bancaire. Voici les informations requises pour votre virement :',
                'body4' => 'Montant : '.$order->total_price.' DH/TTC',
                'body5' => 'Titulaire du compte : Xtramega',
                'body6' => 'Détails du compte : 007010000668500000024207',
                'body7' => 'Adresse de la banque : attijariwafa bank à Agadir',
                'actiontext' => 'Back to home',
                'actionurl' => 'http://127.0.0.1:8000/view-order/'.$order->id,
                'lastline' => 'Veuillez préciser votre numéro de commande dans la description du virement.',
            ];
        }
        elseif ($request->order_choice == "2") {
            $details = [
                'greeting' => 'Bonjour '.$user->name.', Merci d avoir effectué vos achats sur Xtramega Maroc!',
                'body' => 'Identifiant de commande '.$order->tracking_no,
                'body1' => 'Votre commande ayant pour référence '.$order->tracking_no.' a bien été prise en compte. Vous payez lors de la livraison de votre commande.',
                'body2' => 'Moyen de paiement : Payer comptant à la livraison',
                'body3' => 'Nous vous contacterons bientôt',
                'body4' => '',
                'body5' => '',
                'body6' => '',
                'body7' => '',
                'actiontext' => 'Back to home',
                'actionurl' => 'http://127.0.0.1:8000/view-order/'.$order->id,
                'lastline' => 'Xtramega vous remercie!!',
            ];
        }
        $admin = User::where('role_as','1')->first();
        if ($request->order_choice == "0") {
            $details_admin=[
                'greeting' => 'Bonjour '.$admin->name.', vous avez une commande',
                'body' => 'Identifiant de commande '.$order->tracking_no,
                'body1' => 'Nom et prénom : '.$user->name,
                'body2' => 'Email : '.$user->email,
                'body3' => 'Téléphone : '.$user->phone,
                'body4' => 'Adresse : '.$user->address,
                'body5' => 'Moyen de paiement : Payer par virement bancaire',
                'body6' => '',
                'body7' => '',
                'actiontext' => 'Plus de détails',
                'actionurl' => 'http://127.0.0.1:8000/admin/view-order/'.$order->id,
                'lastline' => '',
            ];
    
        }elseif ($request->order_choice == "1") {
            $details_admin=[
                'greeting' => 'Bonjour '.$admin->name.', vous avez une commande',
                'body' => 'Identifiant de commande '.$order->tracking_no,
                'body1' => 'Nom et prénom : '.$user->name,
                'body2' => 'Email : '.$user->email,
                'body3' => 'Téléphone : '.$user->phone,
                'body4' => 'Adresse : '.$user->address,
                'body5' => 'Moyen de paiement : Payer par virement bancaire',
                'body6' => '',
                'body7' => '',
                'actiontext' => 'Plus de détails',
                'actionurl' => 'http://127.0.0.1:8000/admin/view-order/'.$order->id,
                'lastline' => '',
            ];
    
        }
        elseif ($request->order_choice == "2") {
            $details_admin=[
                'greeting' => 'Bonjour '.$admin->name.', vous avez une commande',
                'body' => 'Identifiant de commande '.$order->tracking_no,
                'body1' => 'Nom et prénom : '.$user->name,
                'body2' => 'Email : '.$user->email,
                'body3' => 'Téléphone : '.$user->phone,
                'body4' => 'Adresse : '.$user->address,
                'body5' => 'Moyen de paiement : Payer comptant à la livraison',
                'body6' => '',
                'body7' => '',
                'actiontext' => 'Plus de détails',
                'actionurl' => 'http://127.0.0.1:8000/admin/view-order/'.$order->id,
                'lastline' => '',
            ];
    
        }

        Notification::send($user, new SendEmailNotification($details));
        Notification::send($admin, new SendEmailNotification($details_admin));
        \Cart::clear();
         return view('checkout-complete',compact('order'));
    }
}
