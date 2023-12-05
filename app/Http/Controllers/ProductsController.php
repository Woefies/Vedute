<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
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
        return view('products.index', [
            'products' => Product::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create', [
            'products' => new Product(),
                'categories' => Category::all()
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
            'description' => 'nullable',
            'price' => 'required',
            'material' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required'
        ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description', '');
        $product->material = $request->input('material', '');
        $product->price = $request->input('price');
        $product->image = $request->input('image', '');
        $product->category_id = $request->input('category_id');
        $product->save();

        return redirect()->route('products.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product, Category $category)
    {
        return view('products.show', [
            'product' => $product,
            'category' => $category,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        $categories = Category::all();

        return view('products.edit', compact( 'product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required',
            'category_id' => 'required'
        ]);

        $product = Product::find($product->id);
        $product->update($request->all());

        return redirect()->route('products.show', $product->id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $products)
    {
        $products->delete();
        return redirect()->route('products.index');

    }
}
