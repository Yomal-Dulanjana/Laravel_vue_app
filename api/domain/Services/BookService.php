<?php

namespace domain\Services;
use App\Models\Book;

Class BookService{

    protected $book;

    public function __construct()
    {
        $this->book = new Book();
    }

    public function get($book_id)
    {
        return $this->book->find($book_id);
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

    public function update(array $data, $book_id)
    {
        $book = $this->book->find($book_id);
        $book->update($this->edit($book, $data));
    }

    protected function edit(Book $book, $data)
    {
        return array_merge($book->toArray(), $data);
    }
}