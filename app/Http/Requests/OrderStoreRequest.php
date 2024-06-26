<?php

namespace App\Http\Requests;

use App\Enum\OrderStatusType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

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
            'price' => 'required|numeric|min:0',
            'delivery_date' => 'required|date|after:today',
            'additional_details' => 'nullable|string',
            'address' => 'nullable|string',
            'status' => ['required', new Enum(OrderStatusType::class)],
        ];
    }
}
