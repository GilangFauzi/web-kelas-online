<?php

namespace Database\Seeders;

use App\Models\WatchTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WatchTimeSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WatchTime::create(['user_id' => 1, 'class_id' => 1, 'minutes' => 20]);
        WatchTime::create(['user_id' => 1, 'class_id' => 2, 'minutes' => 50]);
        WatchTime::create(['user_id' => 1, 'class_id' => 3, 'minutes' => 30]);
    }
}
