<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }
    public function add()
    {
        $category = Category::all();
        return view('admin.products.add', compact('category'));
    }
    public function insert(Request $request)
    {
        $products = new Product();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/products/'.$filename);
            $products->image = $filename;
        }
        if ($request->hasFile('brand')) {
            $file = $request->file('brand');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/products/'.$filename);
            $products->product_brand = $filename;
        }
        $products->cate_id = $request->input('cate_id');
        $products->product_name = $request->input('title');
        $products->product_fullname = $request->input('name');
        $products->product_description = $request->input('description');
        $products->qty = $request->input('qty');
        $products->tax = $request->input('tax');
        $products->product_reference = $request->input('ref');
        $products->price = $request->input('price');
        $products->save();
        return redirect('/products-item')->with('status'," Product Added Successfully");
    }
}
