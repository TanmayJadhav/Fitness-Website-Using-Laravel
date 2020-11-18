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
            return redirect()->back()->with('alert','Login Details Not Found. Please Signup First');
        }
        
    }

    // Post Request on signup page
    public function post_register(Request $request){
        
        $name       =   $request->input('username');
        $email      =   $request->input('email');
        $ph_number  =   $request->input('ph_number');

        if($request->input('password1')==$request->input('password2'))
        {
            $password   =   PASSWORD_HASH($request->input('password1'),PASSWORD_BCRYPT);

            if(User::create(['name'=>$name,'email'=>$email,'password'=>$password,'ph_number'=>$ph_number]))
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

    
     
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
    



    public function resetpassword(Request $request) {
        
        $email      =   $request->input('email');
        $ph_number  =   $request->input('number');
        $new_password  =   PASSWORD_HASH($request->input('new_password'),PASSWORD_BCRYPT);

        $user = User::where('email','=',$email )->first();
        
        if ($user)
        {
            $user->password=$new_password;
            $user->save();
            return redirect('/')->with('alert','Password Sucessfully changed');
        }
        else{
            return redirect('/')->with('alert','Credentials Not Found');
        }
        
    }
}
