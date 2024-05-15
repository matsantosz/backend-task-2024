<?php

namespace App\Domain\Store\Http\Controllers;

use App\Domain\Book\Models\Book;
use App\Domain\Store\Models\Store;
use Symfony\Component\HttpFoundation\Response;

class StoreBookDetachController
{
    public function __invoke(Store $store, Book $book): Response
    {
        $store->books()->detach($book);

        $store->load('books');

        return response()->json($store);
    }
}
