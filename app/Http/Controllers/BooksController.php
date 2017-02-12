<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Student;

class BooksController extends Controller
{
    public function index()
    {
    	return view('books.index')->with('books', Book::all());
    }

    public function new()
    {
    	return view('books.new')->with('students', Student::all());
    }

    public function insert(Request $request)
    {
    	$book = new Book;

    	$book->title = $request->input('title');
		$book->description = $request->input('description');
		$book->price = $request->input('price');
		$book->owner_id = $request->input('owner_id');
        
		$book->save();

		return redirect('/books');
	}

}
