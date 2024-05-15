<?php

namespace App\Domain\Store\Models;

use App\Domain\Book\Models\Book;
use Database\Factories\StoreFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Store extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return new StoreFactory;
    }

    public function books(): BelongsToMany
    {
        return $this->belongsToMany(Book::class);
    }
}
