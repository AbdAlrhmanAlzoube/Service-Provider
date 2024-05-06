<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServiceReservation extends Model
{
    use HasFactory;


protected $fillable=[
    'user_id',
    'type',
    'title',
    'description',
    'address',
    'picture_for_clarification'

];

public function user(): BelongsTo
{
    return $this->belongsTo(User::class);
}


}
 