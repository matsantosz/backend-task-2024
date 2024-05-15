<?php

namespace App\Domain\Store\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:2', 'max:255'],
            'address' => ['required', 'string', 'min:2', 'max:255'],
            'active' => ['nullable', 'boolean'],
        ];
    }
}
