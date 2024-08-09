<?php

namespace Database\Seeders;

use App\Models\Classes;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Classes::create(['title' => 'Class AA', 'mentor_id' => 1]);
        Classes::create(['title' => 'Class BB', 'mentor_id' => 1]);
        Classes::create(['title' => 'Class CC', 'mentor_id' => 2]);
    }
}
