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
            'name'=> 'Admin',
            'father_nmae' => 'Prince Bhatt',
            'address' => 'Kathmandu',
            'phon_number' => '9865432156',
            'dob' => '2000-01-01',
            'gender' => 'Male',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 'admin'
        ]);

        $this->call(SemesterSeeder::class);
    }
}
