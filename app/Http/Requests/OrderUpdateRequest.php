<?php

namespace App\Http\Requests;

use App\Enum\OrderStatusType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class OrderUpdateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'user_id' => 'exists:users,id',
            'service_reservation_id' => 'exists:service_reservations,id',
            'price' => 'numeric|min:0',
            'delivery_date' => 'date|after:today',
            'additional_details' => 'nullable|string',
            'address' => 'nullable|string',
            'status' => [new Enum(OrderStatusType::class)],
        ];
    }
}
