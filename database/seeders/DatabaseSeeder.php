<?php

namespace Database\Seeders;

use App\Models\User;
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

        User::factory()->create([
            'name' => ' Admin',
            'email' => 'admin@erp.com',
            'role' => 'admin'
        ]);
        User::factory()->create([
            'name' => 'User',
            'email' => 'user@erp.com',
        ]);
        User::factory()->create([
            'name' => 'Manager',
            'email' => 'manager@erp.com',
            'role' => 'manager'
        ]);
        User::factory()->create([
            'name' => 'Accountant',
            'email' => 'accountant@erp.com',
            'role' => 'accountant',
        ]);
        User::factory()->create([
            'name' => 'Officer',
            'email' => 'officer@erp.com',
            'role' => 'officer',
        ]);
    }
}
