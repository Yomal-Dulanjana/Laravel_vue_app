<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Http\Controllers\Controller;
use domain\Facades\BookFacade;
use Illuminate\Http\Request;

class BookController extends ParantController
{
    protected $book;

    // public function __construct()
    // {
    //     $this->book = new Book();
    // }

    public function index()
    {
        $response['books'] = Book::all();
        //dd($response);
        return view('pages.book.index')->with($response);
    }

    public function store(Request $request)
    {
        $this->book->create($request->all());
        return redirect()->back();
    }

    public function delete($book_id)
    {
        //dd($book_id);
        $book = $this->book->find($book_id);
        $book->delete();
        return redirect()->back();
    }

    public function type($book_id)
    {
        //dd($book_id);
        $book = $this->book->find($book_id);
        $book->type = 1;
        $book->update();
        return redirect()->back();
    }

    // public function update(Request $request, Book $book)
    // {
    //     $book->fill($request->post())->save();
    //     return response()->json([
    //         'message'=>'book Updated Successfully!!',
    //         'book'=>$book
    //     ]);
    // }

    public function show($id)
    {
        $book = Book::find($id);
        return $book;
    }

    
    public function update(Request $request, $id)
    {
        $book =Book::findOrFail($request->id);
        $book->title = $request->title;
        $book->Description = $request->Description;
        $book->price = $request->price;
        

        $book->save();
        return $book;
    }

}

