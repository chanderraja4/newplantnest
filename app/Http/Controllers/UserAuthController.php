<?php

namespace App\Http\Controllers;

use App\Models\UserNew;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserAuthController extends Controller
{
    public function register_user()
    {
        return view('auth.useregister');
    }
    public function login_user()
    {
        return view('auth.userlogin');
    }
    

    public function register_data(Request $request)
    {
         
        $validated = $request->validate([
            'name' => 'required|unique:usernew|max:255',
            'email' => 'required|unique:usernew|max:255',
            'contact' => 'required|unique:usernew|max:255',
            'city' => 'required|max:255',
            'password' => 'required|unique:usernew|max:255',
        ],
        [ 
            'name.required' => 'Please Enter Any Name',
            'email.required' => 'Please Enter Your Email',
            'contact.required' => 'Please Enter Your Contact No',
            'city.required' => 'Please Enter Your City',
            'password.required' => 'Please Enter Any Password',
        ]
    );
        UserNew::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'city' => $request->city,
            'contact' =>$request->contact,
            'created_at' => Carbon::now()
            
        ]);

        return redirect()->back()->with('success', 'Registration Successfull!');
    }



    public function login_data(Request $req){
        // return $req->input();
        $user= UserNew::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password, $user->password)){
            return redirect()->back()->with('success', 'Please Enter Valid Email or Password !');
        }
        else{
            $req->session()->put('usernew', $user);
            return redirect('/');
        }

    }


    public function userlogout(){
        Session::forget('usernew');
        return redirect('/');
    }

}
