<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){

        $products = Product::orderBy('name')->get();

        return view('admin.product.index',compact('products'));
    }

    public function store(Request $request){

        $new_product = Product::create([
            'brand' => $request->brand,
            'name' => $request->name,
            'quantity' => $request->quantity
        ]);
        $new_product->save();
        return redirect()->route('product.index');
    }

    public function update(Request $request, $id){
        $product_update = Product::FindOrFail($id)->get();
        $product_update->name = $request->name;
        $product_update->brand = $request->name;
        $product_update->quantity = $request->quantity;
        $product_update->save();

        return redirect()->route('product.index');
    }

    public function show($id){
        $product = Product::FindOrFail($id);
    
        return view('product.show', compact('product'));
    }
}
