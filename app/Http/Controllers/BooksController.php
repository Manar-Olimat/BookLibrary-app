<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BooksController extends Controller
{
    //show all books

    public function index(){
       
        return view('books.index',[
            'Books'=> Books::latest()->filter
            (request(['search']))->get()
    
        ]);
    }

//show single book
public function show(Books $book){
    return view(
        'books.show',
        [
            'book'=>$book
        ]
    );
}


//add book form
public function create(){
    return view('books.create');
}

//store form data
public function store(Request $request){

    // validation 
$formFields=$request->validate([
    'book_title'=>['required', Rule::unique('books','book_title')],
    'book_description'=>'required' ,
    'book_author'=>'required',
    
    ]);
    
    Books::create($formFields);
    return redirect('/');
}













}
