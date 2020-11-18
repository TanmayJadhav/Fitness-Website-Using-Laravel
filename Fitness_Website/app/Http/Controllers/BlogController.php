<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

class BlogController extends Controller
{
    public function get_fitness_blog(){
        $blogs = Blog::where('type','=','fitness_blog')->get();

        return view('fblog',compact('blogs'));
        
    }

    public function get_nutrition_blog(){
        $blogs = Blog::where('type','=','nutrition_blog')->get();

        return view('nblog',compact('blogs'));
        
    }

    public function get_weight_loss_blog(){
        $blogs = Blog::where('type','=','weight_loss_blog')->get();

        return view('wblog',compact('blogs'));
        
    }


    public function get_blog_description($id){
        
        $blog = Blog::find($id);
        
        return view('blog_description',compact('blog'));
        
    }
}
