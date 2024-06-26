<?php

namespace App\Models;

use App\Enum\OrderStatusType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_reservation_id',
        'price',
        'delivery_date',
        'additional_details',
        'status',
        'address',
    ];

    protected $casts = [
        'status' => OrderStatusType::class,
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function serviceReservation(): BelongsTo
    {
        return $this->belongsTo(ServiceReservation::class);
    }
}
