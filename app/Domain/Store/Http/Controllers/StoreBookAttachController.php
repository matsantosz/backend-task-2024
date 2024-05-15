<?php

namespace App\Domain\Store\Http\Controllers;

use App\Domain\Book\Models\Book;
use App\Domain\Store\Models\Store;
use Symfony\Component\HttpFoundation\Response;

class StoreBookAttachController
{
    public function __invoke(Store $store, Book $book): Response
    {
        $store->books()->syncWithoutDetaching($book);

        $store->load('books');

        return response()->json($store);
    }
}
