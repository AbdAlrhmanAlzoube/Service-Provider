<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceReservationUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            // 'user_id' => 'exists:users,id',
            'type' => 'string|max:255',
            'title' => 'string|max:255',
            'description' => 'string',
            'address' => 'string|max:255',
            'picture_for_clarification' => 'nullable|image|max:2048',
        ];
    }
}
