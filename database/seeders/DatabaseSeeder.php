<?php

namespace Database\Seeders;

use App\Models\attendance;
use App\Models\User;
use App\Models\classes;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // User::factory(50)->create();
        // classes::factory(50)->create();
        attendance::factory(50)->create();
    }
}
