<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;

use Illuminate\Http\Request;

class UserAuthenticateController extends Controller
{
     // Post Request on login page
    public function post_login(Request $request){
        $email      =   $request->input('email');
        $password   =   $request->input('password'); 
        
        if(Auth::attempt(['email'=>$email,'password'=>$password]))
        {
            return redirect('/product_nutrition');
        }
        else{
            return redirect('/');
        }
        
    }

    // Post Request on signup page
    public function post_register(Request $request){
        
        $name       =   $request->input('username');
        $email      =   $request->input('email');

        if($request->input('password1')==$request->input('password2'))
        {
            $password   =   PASSWORD_HASH($request->input('password1'),PASSWORD_BCRYPT);

            if(User::create(['name'=>$name,'email'=>$email,'password'=>$password]))
            {
                return redirect()->back()->with('alert','Sucessfully Registered.Now Please Login To Continue');
            }
            else{
                return redirect()->back()->with('alert','Registration Failed.Please Register Again');
            }
        }

        else{
            return redirect()->back()->with('alert','Password Incorrect');
        }
        
        
    }
    
}
