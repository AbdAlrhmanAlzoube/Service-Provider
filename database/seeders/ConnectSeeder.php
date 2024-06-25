<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Connect;

class ConnectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create sample data for Connect model
        $contacts = [
            [
                'email' => 'example1@example.com',
                'phone' => '123456789',
                'subject_type' => 'General Inquiry',
                'subject' => 'Question about services',
                'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            ],
            [
                'email' => 'example2@example.com',
                'phone' => '987654321',
                'subject_type' => 'Support Request',
                'subject' => 'Issue with login',
                'message' => 'Nulla euismod eros ac magna consectetur, sed condimentum est tempus.',
            ],
            // Add more sample data as needed
        ];

        // Insert data into Connect model
        foreach ($contacts as $contact) {
            Connect::create($contact);
        }
    }
}
