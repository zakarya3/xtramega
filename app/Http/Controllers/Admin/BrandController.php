<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\File;

class BrandController extends Controller
{
    public function index()
    {
        $brand = Brand::all();
        return view('admin.brands.index',compact('brand'));
    }
    public function add()
    {
        return view('admin.brands.add');
    }
    public function insert(Request $request)
    {
        $brand = new Brand();

        $brand->brand_name = $request->input('name');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/products/brands/',$filename);
            $brand->image = $filename;
        }
        $brand->save();
        return redirect('/brands')->with('status'," Brand Added Successfully");
    }
    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('admin.brands.edit',compact('brand'));
    }
    
    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);
        $brand->brand_name = $request->input('name');
        if ($request->hasFile('image')) {
            $path = 'assets/uploads/products/brands/'.$brand->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/products/brands/',$filename);
            $brand->image = $filename;
        }
        $brand->update();
        return redirect('/brands')->with('status'," Brand Updated Successfully");
    }
    public function destroy($id)
    {
        $brand = Brand::find($id);
        $path = 'assets/uploads/products/brands/'.$brand->image;
        if (File::exists($path)) {
            File::delete($path);
        }
        $brand->delete();
        return redirect('/brands')->with('status'," Brand Deleted Successfully");
    }
}
