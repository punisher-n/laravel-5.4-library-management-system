<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
use Auth;
//use Request;
class loginController extends Controller
{
    public function __construct(){
        $this->middleware('guest', ['except' => 'destroy']);
    }

   public function create(){

       return view('pages.admin.login');
   }


    public function store(Request $request){

       if(! auth()->attempt(request(['email'=> $request['email'], 'password' => $request['password'] ]))){
            return back()->withErrors([
                'message' => 'Please check your credentials'
            ]);
        }

        return redirect('/home');
    }

 // public function store(Request $request){

 //   if(! auth()->attempt($request->only(['email', 'password']))){
 //        return back()->withErrors([
 //            'message' => 'Please check your credentials'
 //        ]);
 //    }

 //    return redirect('/home');
 //    }

    public function destroy(){

        auth()->logout();
        
        return redirect('/');
   }

}
