<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function get_product_nutrition(){
        $products = Product::where('type','=','nutrition')->get();

        return view('product_nutrition',compact('products'));
        
    }

    public function get_product_gym_equipments(){
        $products = Product::where('type','=','gym equipment')->get();

        return view('product_gym_equipments',compact('products'));
        
    }
    public function get_product_gym_accessories(){
        $products = Product::where('type','=','gym accessories')->get();

        return view('product_gym_accessories',compact('products'));
        
    }
    public function get_product_gym_clothing(){
        $products = Product::where('type','=','gym clothing')->get();

        return view('product_gym_clothing',compact('products'));
        
    }

    public function get_product_description($id){
        $user_logged = Auth()->user();
        $product_description = Product::find($id);
        
        return view('product_description',compact('product_description','user_logged'));
        
    }
}