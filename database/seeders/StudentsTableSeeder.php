<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('students')->insert([
        
        ['name' => 'Jozce Katambi', 'program' => 'Software Engineering'],
        ['name' => 'Jane Masuke', 'program' => 'Computer Science'],
        ['name' => 'Michael Johnson', 'program' => 'Software Engineering'],
        ['name' => 'Emily Williams', 'program' => 'Information Technology'],
        ['name' => 'David Brown', 'program' => 'Software Engineering'],
        ['name' => 'Sarah Davis', 'program' => 'Computer Science'],
        ['name' => 'Robert Miller', 'program' => 'Information Systems'],
        ['name' => 'Jennifer Wilson', 'program' => 'Software Engineering'],
        ['name' => 'Thomas Moore', 'program' => 'Computer Science'],
        ['name' => 'Lisa Taylor', 'program' => 'Software Engineering'],
        ['name' => 'William Anderson', 'program' => 'Information Technology'],
        ['name' => 'Jessica Thomas', 'program' => 'Software Engineering'],
        ['name' => 'Daniel Jackson', 'program' => 'Computer Science'],
        ['name' => 'Karen White', 'program' => 'Software Engineering'],
        ['name' => 'Christopher Harris', 'program' => 'Information Systems'],
    ]);
}

}
    

