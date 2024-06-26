<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'string|max:255',
            'last_name' => 'string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // example image validation
            'email' => 'email|string',
            'password' => 'string|min:8',
            'type' => 'string|max:255',
        ];
    }
}
