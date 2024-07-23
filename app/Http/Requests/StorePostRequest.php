<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required',
            'body' => 'required',
            'photo' => 'required|image',
        ];
    }
    
    public function authorize(): bool
    {
        return true;
    }
}