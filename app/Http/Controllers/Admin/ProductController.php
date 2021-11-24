<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Type;
use App\Models\Brand;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }
    public function add()
    {
        $type = Type::all();
        $brand = Brand::all();
        return view('admin.products.add', compact('type', 'brand'));
    }
    public function insert(Request $request)
    {
        $products = new Product();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/products/images/',$filename);
            $products->image = $filename;
        }
        $products->cate_id = $request->input('cate_id');
        $products->brand_id = $request->input('brand');
        $products->product_name = $request->input('title');
        $products->product_fullname = $request->input('name');
        $products->product_description = $request->input('description');
        $products->qty = $request->input('qty');
        $products->status = $request->input('status') == TRUE ? '1':'0';
        $products->trending = $request->input('trending') == TRUE ? '1':'0';
        $products->product_reference = $request->input('ref');
        $products->price = $request->input('price');
        $products->save();
        return redirect('/products-item')->with('status'," Product Added Successfully");
    }

    public function edit($id)
    {
        $products = Product::find($id);
        return view('admin.products.edit',compact('products'));
    }
    public function update(Request $request, $id)
    {
        $products = Product::find($id);

        if ($request->hasFile('image')) {
            $path = 'assets/uploads/products/images/'.$products->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/products/images/',$filename);
            $products->image = $filename;
        }
        if ($request->hasFile('brand')) {
            $path = 'assets/uploads/products/brands/'.$products->product_brand;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('brand');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/products/brands/',$filename);
            $products->product_brand = $filename;
        }
        $products->product_name = $request->input('title');
        $products->product_fullname = $request->input('name');
        $products->product_description = $request->input('description');
        $products->qty = $request->input('qty');
        $products->product_reference = $request->input('ref');
        $products->price = $request->input('price');
        $products->status = $request->input('status') == TRUE ? '1':'0';
        $products->trending = $request->input('trending') == TRUE ? '1':'0';
        $products->update();
        return redirect('/products-item')->with('status'," Product Updated Successfully");
    }

    public function destroy($id)
    {
        $products = Product::find($id);
        $path = 'assets/uploads/products/images/'.$products->image;
        if (File::exists($path)) {
            File::delete($path);
        }
        $path1 = 'assets/uploads/products/brands/'.$products->product_brand;
        if (File::exists($path1)) {
            File::delete($path1);
        }
        $products->delete();
        return redirect('/products-item')->with('status'," Product Deleted Successfully");
    }
}
