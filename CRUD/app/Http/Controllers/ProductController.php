<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();         #all() gets all the info from the database
        return view('products.index', ['products'=>$products]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $data = $request->all(); 
        //This will save it into the database automatically
        Product::create($data); 
        return redirect('/product');
    }

    public function edit(Product $product){
        return view('products.edit', ['product'=>$product]);
    }

    public function update(Product $product, Request $request){
        $data = $request->all(); 

        $product->update($data);

        return redirect('/product')->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect('/product')->with('success', 'Product deleted successfully');
    }
}
