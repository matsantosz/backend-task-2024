<?php

namespace App\Domain\Book\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:2', 'max:255'],
            'isbn' => ['required', 'numeric', 'unique:books'],
            'value' => ['required', 'numeric'],
        ];
    }
}
