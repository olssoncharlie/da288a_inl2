<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //

    public function index(){
        $products = Product::all();
        return response()->json($products);
    }

    public function show($id){
        $product = Product::find($id);
        return response()->json($product);
    }

    public function create(Request $request){
        $product = new Product;
        $product->title = $request->input("title");
        $product->brand = $request->input("brand");
        $product->image = $request->input("image");
        $product->description = $request->input("description");
        $product->price = $request->input("price");
        $product->save();

        return response()->json($product);
    }

}
