<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        $semesters = [
            [
                'name' => 'Semester 1',
            ],
            [
                'name' => 'Semester 2',
            ],
            [
                'name' => 'Semester 3',
            ],
            [
                'name' => 'Semester 4',
            ],
            [
                'name' => 'Semester 5',
            ],
            [
                'name' => 'Semester 6',
            ],
            [
                'name' => 'Semester 7',
            ],
            [
                'name' => 'Semester 8',
            ],
            [
                'name' => 'Semester 9',
            ],
            [
                'name' => 'Semester 10',
            ]
        ];
        \App\Models\Semester::insert($semesters);

    }
}
