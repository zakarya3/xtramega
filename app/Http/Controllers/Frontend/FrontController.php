<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Type;
use App\Models\Cart;
use App\Models\Brand;

class FrontController extends Controller
{
    public function index()
    {
        $featured_products = Product::where('trending','1')->take(8)->get();
        $brands = Brand::all();
        $count = Cart::where('user_id',Auth::id())->get()->count();
        $cartitems = Cart::where('user_id', Auth::id())->get();
        $new = Product::where('status','1')->take(4)->get();
        $qty = Product::where('qty','<=','10')->take(4)->get();
        $random = Product::all()->random(4);
        return view('welcome', compact('featured_products','count','cartitems','brands','new','qty','random'));
    }
    public function products($name)
    {
        if (Category::where('category_name',$name)->exists()) {

            $category1 = Category::where('category_name',$name)->first();
            $id = $category1->id;
            $type = Type::where('categ_id',$id)->get();
            $id_type = Type::where('categ_id',$id)->pluck('id');
            $brands = Brand::all();
            $product = Product::whereIn('cate_id',$id_type)->paginate(16);
            $count = Cart::where('user_id',Auth::id())->get()->count();
            $cartitems = Cart::where('user_id', Auth::id())->get();
            return view('products',compact('type','product','count','cartitems','brands'));

        }
    }
    public function type($name, $typeName)
    {
        if (Category::where('category_name',$name)->exists()) {

            $category1 = Category::where('category_name',$name)->first();
            $id = $category1->id;
            $type = Type::where('categ_id',$id)->get();
            $type_name = Type::where('name',$typeName)->first();
            $id_type = $type_name->id;
            $product = Product::where('cate_id',$id_type)->paginate(16);
            $count = Cart::where('user_id',Auth::id())->get()->count();
            $brands = Brand::all();
            $cartitems = Cart::where('user_id', Auth::id())->get();
            return view('products',compact('type','product','count','cartitems','brands'));

        }
    }

    public function product($type, $name)
    {
        if (Type::where('name',$type)->exists()) {
            if (Product::where('product_name',$name)->exists()) {
    
                $product = Product::where('product_name',$name)->first();
                $type_name = Type::where('name',$type)->first();
                $id_type = $type_name->id;
                $products = Product::where('cate_id',$id_type)->get()->take(8);
                $count = Cart::where('user_id',Auth::id())->get()->count();
                $cartitems = Cart::where('user_id', Auth::id())->get();
                return view('product', compact('product','products','count','cartitems'));
            }
        }
    }
    public function brand()
    {
        $brands = Brand::all();
        $count = Cart::where('user_id',Auth::id())->get()->count();
        $cartitems = Cart::where('user_id', Auth::id())->get();
        return view('brand', compact('count','cartitems','brands'));
    }

    public function contact()
    {
        $brands = Brand::all();
        $count = Cart::where('user_id',Auth::id())->get()->count();
        $cartitems = Cart::where('user_id', Auth::id())->get();
        return view('contact', compact('count','cartitems','brands'));
    }
}
