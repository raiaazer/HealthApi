<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'calculator_name' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        $category                  = new Category;
        $category->calculator_name = $request->calculator_name;
        $category->title           = $request->title;
        $category->description     = $request->description;
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category created successfully');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $request->validate([
            'calculator_name' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        $category->calculator_name = $request->calculator_name;
        $category->title           = $request->title;
        $category->description     = $request->description;
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category updated successfully');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
    }

    public function getCategories()
    {
        $categories = Category::all();

        return response()->json($categories);
    }

}
