<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceReservation;

class ServiceReservationSeeder extends Seeder
{
    public function run()
    {
        ServiceReservation::factory()->count(10)->create();

        ServiceReservation::create([
            'type' => 'زفاف',
            'title' => 'حفل زفاف أنيق',
            'description' => 'حفل زفاف رائع يجمع بين الفخامة والأناقة.',
            'address' => 'مكان من اختيار الزبون',
            'picture' => 'wedding.jpg',
            'price' => 10000,
        ]);

        ServiceReservation::create([
            'type' => 'عيد ميلاد',
            'title' => 'حفلة عيد ميلاد للأطفال',
            'description' => 'حفلة مليئة بالمرح والألعاب والهدايا للأطفال.',
            'address' => 'مكان من اختيار الزبون',
            'picture' => 'birthday.jpg',
            'price' => 1500,
        ]);
    }
}
