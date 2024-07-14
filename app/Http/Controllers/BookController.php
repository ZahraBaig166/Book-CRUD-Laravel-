<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use  App\Models\Book;
use Psy\Readline\Hoa\Console;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('book.index',['books'=> $books]);
    }
    public function create(){
        return view('book.create');
    }
    public function store(Request $request){
        $data=$request->validate([
            'name' => 'required|string|max:255',
            'short_description' => 'required|string',
            'price' => 'required|numeric',
            'isbn' => 'required|string|unique:books',
            'no_of_pages' => 'required|integer',
            'publication_date' => 'required|date',
        ]);
        $newbook= Book::create($data);
        return redirect(route('book.index'))->with('success','Book added successfully');
    }
    public function edit(Book $book){
        return view('book.edit',['book'=> $book]);
    }

    public function update(Book $book, Request $request){
        $data=$request->validate([
            'name' => 'required|string|max:255',
            'short_description' => 'required|string',
            'price' => 'required|numeric',
            'isbn' => 'required|string',
            'no_of_pages' => 'required|integer',
            'publication_date' => 'required|date',
        ]);
        $book->update($data);
        return redirect(route('book.index'))->with('success','Book updated successfully');
    }

    public function delete(Book $book){
        $book->delete();
        return redirect(route('book.index'))->with('success','Book deleted successfully');
    }

}