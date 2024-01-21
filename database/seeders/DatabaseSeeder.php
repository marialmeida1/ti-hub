<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    protected $seeders = [
        CoursesSeeder::class,
        LessonsSeeder::class,
    ];

    public function run(): void
    {
    }
}
