<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::where('is_published', 1)->get(); // select * from products where is_published = 1

        return view('products.index', compact('products'));
    }

    public function create() {

        return view('products.create');
    }

    public function store(Request $request){
        //dd($request->all());
        $product = new Product();
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->qty = $request->get('qty');
        $product->is_published = $request->boolean('is_published');
        $product->save();

        return redirect()->back();
    }
}
