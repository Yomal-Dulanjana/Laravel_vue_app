<?php

namespace domain\Services;
use App\Models\Book;

class BoolService
{
    protected $book;
    public function __construct()
    {
        $this->book = new Book();
    }

    public function all()
    {
        return $this->book->all();
    }

    public function store($data)
    {
        $this->book->create($data);
    }

    public function delete($book_id)
    {
        //dd($book_id);
        $book = $this->book->find($book_id);
        $book->delete();
    }

    public function type($book_id)
    {
        //dd($book_id);
        $book = $this->book->find($book_id);
        $book->type = 1;
        $book->update();
    }

}