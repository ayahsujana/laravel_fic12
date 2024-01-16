<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        //get product pagination
        $products = \App\Models\Product::paginate(5);
        return view('pages.products.index', compact('products'));

    }

    public function create()
    {
        // categories
        $categories = \App\Models\Category::all();
        return view('pages.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required|unique:products',
            'description' =>'',
            'price' =>'required|integer',
            'stock' =>'required|integer',
            'category_id' =>'required|integer',
            'image' =>'required',
        ]);
        $data = $request->all();
        // $request->validate([
        //     'name' => 'required|unique:products',
        //     'price' => 'required|integer',
        //     'stock' => 'required|integer',
        //     //'image' => 'required|image|mimes:png,jpg,jpeg',
        //     'image' => 'required',
        //     'description' => '',
        //     'category' => 'required|in:food,drink,snack'
        // ]);

        // if($request->hasFile('image')){
        //     $extension = pathinfo($request->file('image')->getClientOriginalName(), PATHINFO_EXTENSION);
        //     $value = time().'.'.$extension;
        //     $request->file('image')->move(public_path('uploads/products'), $value);
        // }

        // $filename = time() . '.' . $request->image->extension();
        // $request->image->storeAs('public/uploads', $filename);
        // $request->file('image')->move(public_path('uploads/products'), $filename);
       // $data = $request->all();

        $product = new \App\Models\Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->category_id = $request->category_id;
        $product->image = $request->image;

        $product->save();

        return redirect()->route('product.index')->with('success', 'Product successfully created');
    }

    public function edit($id)
    {
        $product = \App\Models\Product::find($id);
        $categories = \App\Models\Category::all();
        return view('pages.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = \App\Models\Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->category_id = $request->category_id;
        $product->image = $request->image;
        $product->save();
        return redirect()->route('product.index')->with('success', 'Product successfully updated');
        // $data = $request->all();
        // $product = \App\Models\Product::findOrFail($id);
        // $product->update($data);
        // return redirect()->route('product.index')->with('success', 'Product successfully updated');
    }

    public function destroy($id)
    {
        $product = \App\Models\Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Product successfully deleted');
    }
}
