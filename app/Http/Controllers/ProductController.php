<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$products = DB::select('select * from products');
        $products = Product::all();
        $categorias = Category::all();
        return view('crudclient.index', compact('products', 'categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Category::all();
        return view('crudclient.create', compact('categorias'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $products = new Product;
        $products->nombre = $request->input('nombre');
        $products->precio = $request->input('precio');
        $products->cantidad = $request->input('cantidad');
        $products->categoria_id = $request->input('categoria_id');
        $products->save();
        return redirect()->route('crudclient.index')->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $products = Product::find($id); //WHERE id=$id
        $categorias = Category::all();
        return view('crudclient.edit', compact('products', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $products = Product::find($id);
        $products->nombre = $request->input('nombre');
        $products->precio = $request->input('precio');
        $products->cantidad = $request->input('cantidad');
        $products->categoria_id = $request->input('categoria_id');
        $products->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $products = Product::find($id);
        $products->delete();
        return redirect('dashboard');
    }

    public function filters(Request $request)
    {
        $selectedCategory = $request->input('categoria_id');
        $products = Product::where('categoria_id', $selectedCategory)->get();
        $categorias = Category::all();
        return view('crudclient.index', compact('products', 'categorias'));
    }
}
