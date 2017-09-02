<?php namespace App\Http\Controllers;

use App\books;
//use Illuminate\Http\Request;
use Request;
use Carbon\Carbon;

class booksController extends Controller
{
    public function index(){

        $books =books::latest('created_at')->published()-> get();

        return view('pages.books')->with('books', $books);
    }

    public function show($id)
    {
        $books = books::findOrFail($id);

          
        return view('pages.show')->with('books', $books);
    }

    public function create_book()
    {
    	return view('pages.create');
    }

    public function store()
    {
    	$input= Request::all('title');
    	
    	books::create($input);

       return redirect('books');
    }

    
}
