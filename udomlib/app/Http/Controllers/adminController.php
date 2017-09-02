<?php

namespace App\Http\Controllers;
use request;
//use Illuminate\Http\Request;
use App\members;

class adminController extends Controller
{
    public function home(){
        return view('pages.admin.home');
    }

    public function newbook(){
        return view('pages.admin.new_books');
    }
//    public function newuser(){
//
//        return view('pages.admin.new_user');
//    }
//    public function store_user(){
//
//        $this->validate(Request(), [
//
//            'fname' => 'required',
//            'oname' => 'required',
//            'lname' => 'required',
//            'email' => 'required|email',
//            'phone' => 'required'
//        ]);
//
//        //hapa tuna mcreate user
//
//        $user = members::create(request(['fname','oname','lname','email','phone']));
//
//        return $user;
//    }
}
