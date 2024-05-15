<?php

namespace App\Domain\Book\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['string', 'min:2', 'max:255'],
            'isbn' => ['numeric', 'unique:books'],
            'value' => ['numeric'],
        ];
    }
}
