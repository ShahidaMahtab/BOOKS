<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BooksController extends Controller
{
    
    public function index()
    {
        $books=Book::paginate(6);
        
        return view('books.index',[
            'books'=>$books
        ]);
       
    }


    public function create()
    {
        return view('books.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'ISBN' =>'required|integer',
            'Title' => 'required',
            'Author' =>'required',
            'Publisher'=>'required',
            'Price'=>'required'
        ]);
        
        $book = Book::create([
                'id' =>$request->input('id'), 
                'ISBN' =>$request->input('ISBN'),
                'Title' =>$request->input('Title'),
                'Author' =>$request->input('Author'),
                'Publisher' =>$request->input('Publisher'),
                'Price'=>$request->input('Price')
        ]);
        return redirect('/books');
        
    }

    
    public function show(Book $book)
    {
        // return view('books.show',compact('book'));
    }

    
    public function edit($id)
    {
        $book = Book::find($id);
        // $book = Book::find($id)->first();
        return view('books.edit')->with('book',$book);
    }

   
    public function update(Request $request, $id)
    {
        $request->validate([
            'ISBN' =>'required|integer',
            'Title' => 'required',
            'Author' =>'required',
            'Publisher'=>'required',
            'Price'=>'required'
        ]);
        $book = Book::Where('id', $id)
        ->update([
                // 'id' =>$request->input('id'), 
                'ISBN' =>$request->input('ISBN'),
                'Title' =>$request->input('Title'),
                'Author' =>$request->input('Author'),
                'Publisher' =>$request->input('Publisher'),
                'Price' =>$request->input('Price')
        ]);
        return redirect('/books');
    }

    
    public function destroy(Book $book)
    {
    //    dd($book);
       $book->delete();
        return redirect('/books');
       
    }
}
