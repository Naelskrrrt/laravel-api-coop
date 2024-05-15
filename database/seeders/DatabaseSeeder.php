<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Admin;
use App\Models\Reservation;
use App\Models\Voiture;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Customer::factory(10)->create();
        Reservation::factory(10)->create();
        Voiture::factory(10)->create();
        Admin::factory(10)->create();

    }
}
