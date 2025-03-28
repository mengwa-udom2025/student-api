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
        
        ['name' => 'Joyce Katambi', 'program' => 'Software Engineering'],
        ['name' => 'Jane Masuke', 'program' => 'Computer Science'],
        ['name' => 'Jonas Johnson', 'program' => 'Software Engineering'],
        ['name' => 'Emmanuel Williams', 'program' => 'Information Technology'],
        ['name' => 'David Pascal', 'program' => 'Software Engineering'],
        ['name' => 'Sarah Masanja', 'program' => 'Computer Science'],
        ['name' => 'Robert Paul', 'program' => 'Information Systems'],
        ['name' => 'Jennifer Wilson', 'program' => 'Software Engineering'],
        ['name' => 'Thomas Kimola', 'program' => 'Computer Science'],
        ['name' => 'Samwel Isack', 'program' => 'Software Engineering'],
        ['name' => 'Witnes John', 'program' => 'Information Technology'],
        ['name' => 'Jessica Mwakipesikile', 'program' => 'Software Engineering'],
        ['name' => 'Daniel Ezekiel', 'program' => 'Computer Science'],
        ['name' => 'Karen Magaka', 'program' => 'Software Engineering'],
        ['name' => 'Christopher Mashaka', 'program' => 'Information Systems'],
    ]);
}

}
    

