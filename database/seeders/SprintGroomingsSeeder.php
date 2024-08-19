<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SprintGrooming;
use App\Models\SprintGroomings;

class SprintGroomingsSeeder extends Seeder
{
    public function run()
    {
        SprintGroomings::create([
            'title' => 'First Grooming',
            'description' => 'Membahas API pada sprint groomings.',
            'meeting_date' => '2024-07-01',
        ]);

        SprintGroomings::create([
            'title' => 'Second Grooming',
            'description' => 'This is the second sprint grooming session.',
            'meeting_date' => '2024-07-08',
        ]);
    }
}
