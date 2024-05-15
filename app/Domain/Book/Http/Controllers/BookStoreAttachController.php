<?php

namespace App\Domain\Book\Http\Controllers;

use App\Domain\Book\Models\Book;
use App\Domain\Store\Models\Store;
use Symfony\Component\HttpFoundation\Response;

class BookStoreAttachController
{
    public function __invoke(Book $book, Store $store): Response
    {
        $book->stores()->syncWithoutDetaching($store);

        $book->load('stores');

        return response()->json($book);
    }
}
