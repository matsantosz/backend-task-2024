<?php

namespace App\Domain\Store\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['string', 'min:2', 'max:255'],
            'address' => ['string', 'min:2', 'max:255'],
            'active' => ['boolean'],
        ];
    }
}
