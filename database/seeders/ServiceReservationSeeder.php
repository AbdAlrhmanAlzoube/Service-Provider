<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceReservation;

class ServiceReservationSeeder extends Seeder
{
    public function run()
    {
        ServiceReservation::factory()->count(10)->create();
    }
}
