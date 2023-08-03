<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Http\Controllers\Controller;
use domain\Facades\BookFacade;
use Illuminate\Http\Request;

class BookController extends ParantController
{
    public function index()
    {
        $response['books'] = BookFacade::all();
        //dd($response);
        return view('pages.book.index')->with($response);
    }

    public function store(Request $request)
    {
        BookFacade::store($request->all()); 
        return redirect()->back();
    }

    public function delete($book_id)
    {
        //dd($book_id);
        BookFacade::delete($book_id);
        return redirect()->back();
    }

    public function type($book_id)
    {
        //dd($book_id);
        BookFacade::type($book_id);
        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $$response['book'] = BookFacade::get($request['book_id']);
        return view('pages.book.edit')->with($response);
    }

    public function update(Request $request,$book_id)
    {
        BookFacade::update($request->all(), $book_id);
        return redirect()->back();
    }

    
}

