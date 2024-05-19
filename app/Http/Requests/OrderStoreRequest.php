<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'user_id' => 'required|exists:users,id',
            'service_reservation_id' => 'required|exists:service_reservations,id',
            'price' => 'required|integer',
            'delivery_date' => 'required|date',
            'additional_details' => 'required|string|max:255',
        ];
    }
}
