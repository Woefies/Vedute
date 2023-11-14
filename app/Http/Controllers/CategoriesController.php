<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('categories.index', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create', [
            'categories' => new Category()
        ]
    );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $request->validate([
                'name' => 'required',
                'description' => 'required',
            ]);

            $categories = new Category();
            $categories->name = $request->input('name');
            $categories->description = $request->input('description');
            $categories->save();

            return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('categories.show', [
            'category' => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('categories.edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $category = Category::find($category->id);
        $category->update($request->all());

        return redirect()->route('categories.index', $category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index');
    }
}
