<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();

        return view('recipe.index', compact('recipes'));
    }

    public function create()
    {
        return view('recipe.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name'           => 'required',
            'ingredients'    => 'required',
            'instructions'   => 'required',
            'time'           => 'required|integer',
            'serving'        => 'required|integer',
            'calories'       => 'required|integer',
            'net_carbs'      => 'required|integer',
            'carbs'          => 'required|integer',
            'fat'            => 'required|integer',
            'proteins'       => 'required|integer',
            'nutrients'      => 'required',
            'benefits'       => 'required',
            'thumbnail'      => 'required',
            'calculator_name'=> 'required',
        ]);
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailPath = $thumbnail->store('recipe-images', 'public');
        } else {
            $thumbnailPath = null;
        }

        $recipe                  = new Recipe;
        $recipe->name            = $request->name;
        $recipe->calculator_name = $request->calculator_name;

        $recipe->ingredients     = $request->ingredients;
        $recipe->instructions    = $request->instructions;
        $recipe->time            = $request->time;
        $recipe->serving         = $request->serving;
        $recipe->calories        = $request->calories;
        $recipe->net_carbs       = $request->net_carbs;
        $recipe->carbs           = $request->carbs;
        $recipe->fat             = $request->fat;
        $recipe->proteins        = $request->proteins;
        $recipe->nutrients       = $request->nutrients;
        $recipe->benefits        = $request->benefits;
        $recipe->thumbnail       = $thumbnailPath;
        $recipe->save();

        return redirect()->route('recipes.index')->with('success', 'Recipe created successfully');
    }

    public function edit($id)
    {
        $recipe = Recipe::findOrFail($id);

        return view('recipe.edit', compact('recipe'));
    }

    public function update(Request $request, $id)
    {
        $recipe = Recipe::findOrFail($id);

        $request->validate([
            'name'           => 'required',
            'ingredients'    => 'required',
            'instructions'   => 'required',
            'time'           => 'required|integer',
            'serving'        => 'required|integer',
            'calories'       => 'required|integer',
            'net_carbs'      => 'required|integer',
            'carbs'          => 'required|integer',
            'fat'            => 'required|integer',
            'proteins'       => 'required|integer',
            'nutrients'      => 'required',
            'benefits'       => 'required',
            // 'thumbnail'      => 'required',
            'calculator_name'=> 'required',
            // 'thumbnail'     => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // dd($request->all());

        $recipe->name            = $request->name;
        $recipe->calculator_name = $request->calculator_name;

        $recipe->ingredients     = $request->ingredients;
        $recipe->instructions    = $request->instructions;
        $recipe->time            = $request->time;
        $recipe->serving         = $request->serving;
        $recipe->calories        = $request->calories;
        $recipe->net_carbs       = $request->net_carbs;
        $recipe->carbs           = $request->carbs;
        $recipe->fat             = $request->fat;
        $recipe->proteins        = $request->proteins;
        $recipe->nutrients       = $request->nutrients;
        $recipe->benefits        = $request->benefits;

        if ($request->hasFile('thumbnail')) {
            if ($recipe->thumbnail) {
                Storage::delete('public/' . $recipe->thumbnail);
            }

            $thumbnail = $request->file('thumbnail');
            $thumbnailPath = $thumbnail->store('recipe-images', 'public');
            $recipe->thumbnail = $thumbnailPath;
        } else {
            $thumbnailPath = $recipe->thumbnail;
        }

        $recipe->save();

        return redirect()->route('recipes.index')->with('success', 'Recipe updated successfully');
    }

    public function destroy($id)
    {

        $recipe = Recipe::findOrFail($id);

        if ($recipe->thumbnail) {
            Storage::delete('public/' . $recipe->thumbnail);
        }
        $recipe->delete();

        return redirect()->route('recipes.index')->with('success', 'Recipe deleted successfully');
    }

    public function getRecipes()
    {
        $recipes = Recipe::all();

        return response()->json($recipes);
    }
}
