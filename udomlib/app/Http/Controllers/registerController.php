<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
class registerController extends Controller
{
    public function create()
    {
        return view('pages.admin.new_user');
    }


    public function store(){
        $this->validate(Request(),[
           'fname' => 'required',
            'oname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'required'

        ]);

        User::create(request(['fname', 'oname', 'lname', 'email', 'phone','password']));

        return redirect('/register');
    }
}
