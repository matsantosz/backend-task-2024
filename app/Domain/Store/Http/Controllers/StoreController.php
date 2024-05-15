<?php

namespace App\Domain\Store\Http\Controllers;

use App\Domain\Store\Http\Requests\StoreStoreRequest;
use App\Domain\Store\Http\Requests\UpdateStoreRequest;
use App\Domain\Store\Models\Store;
use Symfony\Component\HttpFoundation\Response;

class StoreController
{
    public function index(): Response
    {
        $stores = Store::all();

        return response()->json($stores);
    }

    public function store(StoreStoreRequest $request): Response
    {
        $store = Store::create($request->validated());

        return response()->json($store, 201);
    }

    public function show(Store $store): Response
    {
        $store->load('books');

        return response()->json($store);
    }

    public function update(UpdateStoreRequest $request, Store $store)
    {
        $store->update($request->validated());

        return response()->json($store);
    }

    public function destroy(Store $store): Response
    {
        $store->delete();

        return response()->noContent();
    }
}
