<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subjects')->insert([
            // Year 1
            ['name' => 'Introduction to Programming', 'year' => 1],
            ['name' => 'Discrete Mathematics', 'year' => 1],
            ['name' => 'Computer Fundamentals', 'year' => 1],
            ['name' => 'Calculus for Computing', 'year' => 1],
            ['name' => 'Communication Skills', 'year' => 1],
            
            // Year 2
            ['name' => 'Data Structures and Algorithms', 'year' => 2],
            ['name' => 'Database Systems', 'year' => 2],
            ['name' => 'Object-Oriented Programming', 'year' => 2],
            ['name' => 'Computer Networks', 'year' => 2],
            ['name' => 'Operating Systems', 'year' => 2],
            
            // Year 3
            ['name' => 'Software Engineering', 'year' => 3],
            ['name' => 'Web Development', 'year' => 3],
            ['name' => 'Mobile Application Development', 'year' => 3],
            ['name' => 'Artificial Intelligence', 'year' => 3],
            ['name' => 'System Analysis and Design', 'year' => 3],
            
            // Year 4
            ['name' => 'Project Management', 'year' => 4],
            ['name' => 'Cloud Computing', 'year' => 4],
            ['name' => 'Big Data Analytics', 'year' => 4],
            ['name' => 'Information Security', 'year' => 4],
            ['name' => 'Final Year Project', 'year' => 4],
        ]);
    }
    }

