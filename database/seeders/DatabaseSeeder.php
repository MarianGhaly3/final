<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Beverage;
use App\Models\Message;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// \Schema::disableForeignKeyConstraints();

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        Beverage::factory(8)->create();
        Message::factory(5)->create();
    }
}
