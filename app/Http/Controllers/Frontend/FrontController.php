<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Type;
use App\Models\Cart;
use App\Notifications\SendEmailNotification;
use Notification;
use App\Models\Brand;
use App\Models\User;

class FrontController extends Controller
{
    public function index()
    {
        $cartItems = \Cart::getContent();
        $featured_products = Product::where('trending','1')->take(8)->get();
        $brands = Brand::all();
        $new = Product::where('status','1')->take(4)->get();
        $qty = Product::where('qty','<=','10')->take(4)->get();
        $count_prd = Product::all()->count();
        if ($count_prd>4) {
            $random = Product::all()->random(4);
        }else{
            $random = Product::all()->random($count_prd);
        }
        // dd($random);
        return view('welcome', compact('featured_products','brands','new','qty','random','cartItems'));
    }
    public function products($name)
    {
        if (Category::where('category_name',$name)->exists()) {
            $cartItems = \Cart::getContent();
            $category1 = Category::where('category_name',$name)->first();
            $id = $category1->id;
            $type = Type::where('categ_id',$id)->get();
            $id_type = Type::where('categ_id',$id)->pluck('id');
            $brands = Brand::all();
            $product = Product::whereIn('cate_id',$id_type)->paginate(16);
            return view('products',compact('type','name','product','brands','cartItems'));

        }
    }
    public function type($name, $typeName)
    {
        if (Category::where('category_name',$name)->exists()) {
            $cartItems = \Cart::getContent();
            $category1 = Category::where('category_name',$name)->first();
            $id = $category1->id;
            $type = Type::where('categ_id',$id)->get();
            $type_name = Type::where('name',$typeName)->first();
            $id_type = $type_name->id;
            $product = Product::where('cate_id',$id_type)->paginate(16);
            $brands = Brand::all();
            return view('products',compact('type','name','product','brands','cartItems'));

        }
    }

    public function product($type, $name)
    {
        if (Type::where('name',$type)->exists()) {
            if (Product::where('product_name',$name)->exists()) {
                $cartItems = \Cart::getContent();
                $product = Product::where('product_name',$name)->first();
                $type_name = Type::where('name',$type)->first();
                $id_type = $type_name->id;
                $products = Product::where('cate_id',$id_type)->get()->take(8);    
                return view('product', compact('product','products','cartItems'));
            }
        }
    }
    public function brand()
    {
        $cartItems = \Cart::getContent();
        $brands = Brand::all();
        return view('brand', compact('brands','cartItems'));
    }

    public function contact()
    {
        $cartItems = \Cart::getContent();
        $brands = Brand::all();
        return view('contact', compact('brands','cartItems'));
    }

    public function message(Request $request)
    {
        $admin = User::where('role_as','1')->first();
        $details = [
            'greeting' => 'Message du client : '.$request->name,
            'body' => 'Client: '.$request->name,
            'body1' => 'Adresse email: '.$request->email,
            'body2' => 'Téléphone: '.$request->phone,
            'body3' => 'Sujet: '.$request->subject,
            'body4' => 'Message: '.$request->message,
            'body5' => '',
            'body6' => '',
            'body7' => '',
            'actiontext' => '',
            'actionurl' => '',
            'lastline' => '',
        ];
        Notification::send($admin, new SendEmailNotification($details));
        return redirect()->back();
    }
}
