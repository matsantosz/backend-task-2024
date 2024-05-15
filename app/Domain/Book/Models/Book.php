<?php

namespace App\Domain\Book\Models;

use App\Domain\Store\Models\Store;
use Database\Factories\BookFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return new BookFactory;
    }

    public function stores(): BelongsToMany
    {
        return $this->belongsToMany(Store::class);
    }
}
