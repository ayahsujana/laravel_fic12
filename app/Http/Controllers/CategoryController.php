<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = \App\Models\Category::paginate(5);
        return view('pages.category.index', compact('categories'));
    }

    public function create()
    {
        $categories = \App\Models\Category::all();
        return view('pages.category.create');
    }

    public function store(Request $request)
    {
        $categories = new \App\Models\Category;
        $categories->name = $request->name;
        $categories->description = $request->description;
        $categories->image = $request->image;
        $categories->save();
        return redirect()->route('category.index')->with('success', 'Category successfully created');
    }

    public function edit($id)
    {
        $categories = \App\Models\Category::findOrFail($id);
        return view('pages.category.edit', compact('categories'));
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'name' => 'required|max:100',
            'description' => 'required',
            'image' => 'required'
        ]);

        $categories = \App\Models\Category::findOrFail($id);
        $categories->update($validateData);
        return redirect()->route('category.index')->with('success', 'Category successfully updated');
    }

    // destroy
    public function destroy($id)
    {
        $categories = \App\Models\Category::findOrFail($id);
        $categories->delete();
        return redirect()->route('category.index')->with('success', 'Category successfully deleted');
    }
}
