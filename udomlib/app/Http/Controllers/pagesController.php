<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
   function homepage(){
   	
       return view('pages.home')->with([
       		'first' => 'Emilian',
       		'last' => 'ngatunga'
       	]);
   }

   function  main(){
       return view('pages.index');
   }

   public function about()
   {

   }
}
