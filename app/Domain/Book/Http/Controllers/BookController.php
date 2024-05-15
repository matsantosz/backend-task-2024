<?php

namespace App\Domain\Book\Http\Controllers;

use App\Domain\Book\Http\Requests\StoreBookRequest;
use App\Domain\Book\Http\Requests\UpdateBookRequest;
use App\Domain\Book\Models\Book;
use Symfony\Component\HttpFoundation\Response;

class BookController
{
    public function index(): Response
    {
        $books = Book::all();

        return response()->json($books);
    }

    public function store(StoreBookRequest $request): Response
    {
        $book = Book::create($request->validated());

        return response()->json($book, 201);
    }

    public function show(Book $book): Response
    {
        $book->load('stores');

        return response()->json($book);
    }

    public function update(UpdateBookRequest $request, Book $book)
    {
        $book->update($request->validated());

        return response()->json($book);
    }

    public function destroy(Book $book): Response
    {
        $book->delete();

        return response()->noContent();
    }
}
