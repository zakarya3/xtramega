<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\Category;

class TypeController extends Controller
{
    public function index()
    {
        $type = Type::all();
        return view('admin.types.index', compact('type'));
    }
    public function add()
    {
        $categorie = Category::all();
        return view('admin.types.add', compact('categorie'));
    }
    public function insert(Request $request)
    {
        $type = new Type();
        $type->name = $request->input('name');
        $type->categ_id = $request->input('categ');
        $type->save();
        return redirect('/types')->with('status'," Type Added Successfully");
    }
    public function edit($id)
    {
        $type = Type::find($id);
        return view('admin.types.edit',compact('type'));
    }
    public function update(Request $request, $id)
    {
        $type = Type::find($id);
        $type->name = $request->input('name');
        $type->update();
        return redirect('/types')->with('status'," Type Updated Successfully");
    }

    public function destroy($id)
    {
        $type = Type::find($id);
        $type->delete();
        return redirect('/types')->with('status'," Type Deleted Successfully");
    }
}
