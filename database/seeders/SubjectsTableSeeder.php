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
            ['name' => 'Development Perspectives ', 'year' => 1],
            ['name' => 'Discrete Mathematics for ICT', 'year' => 1],
            ['name' => 'Introduction to High Level Programming ', 'year' => 1],
            ['name' => 'Calculus for Computing', 'year' => 1],
            ['name' => 'Communication Skills', 'year' => 1],
            ['name' => 'Linear Algebra for ICT', 'year' => 1],
            ['name' => 'Introduction to Information Technology ', 'year' => 1],
            ['name' => 'Calculus ', 'year' => 1],
            ['name' => 'Mathematical Foundations of Information
Security', 'year' => 1],
            ['name' => 'Numerical Analysis for ICT', 'year' => 1],
            ['name' => 'ntroduction to Database Systems', 'year' => 1],
            ['name' => 'Introduction to Computer Networking', 'year' => 1],
            ['name' => 'Introduction to Probability and Statistics', 'year' => 1],
            ['name' => 'Introduction to Software Engineering ', 'year' => 1],
            ['name' => 'Introduction to IT Security ', 'year' => 1],
            ['name' => 'Wearable Computing ', 'year' => 1],
            ['name' => 'Industrial Practical Training I', 'year' => 1],
            
            // Year 2
            ['name' => 'Data Structures and Algorithms', 'year' => 2],
            ['name' => 'Database Systems', 'year' => 2],
            ['name' => 'Object-Oriented Programming in Java', 'year' => 2],
            ['name' => 'Computer Networking Protocols', 'year' => 2],
            ['name' => 'Operating Systems', 'year' => 2],
            ['name' => 'Introduction to Linux/Unix Systems ', 'year' => 2],
            ['name' => 'Systems Analysis and Design', 'year' => 2],
            ['name' => 'Data Structure and Algorithms Analysis ', 'year' => 2],
            ['name' => 'Computer Organization and Architecture I', 'year' => 2],
            ['name' => 'Computational Theory ', 'year' => 2],
            ['name' => 'Internet Programming and Application I', 'year' => 2],
            ['name' => 'ICT Research Methods ', 'year' => 2],
            ['name' => 'Open Source Technologies', 'year' => 2],
            ['name' => 'Object-Oriented Systems Design', 'year' => 2],
            ['name' => 'Database Management Systems', 'year' => 2],
            ['name' => 'Software Testing and Quality Assurance ', 'year' => 2],
            ['name' => 'Industrial Practical Training II', 'year' => 2],
            
            // Year 3
            ['name' => 'Selected Topic in Software Engineering', 'year' => 3],
            ['name' => 'Web Framework Development using Javascript', 'year' => 3],
            ['name' => 'Mobile Application Development', 'year' => 3],
            ['name' => 'Advanced Java Programming', 'year' => 3],
            ['name' => 'System Analysis and Design', 'year' => 3],
            ['name' => 'Distributed Database Systems', 'year' => 3],
            ['name' => 'Information and Communication Systems Security', 'year' => 3],
            ['name' => 'Data Mining and Warehousing', 'year' => 3],
            ['name' => 'Industrial Pratical Training III', 'year' => 3],
            ['name' => 'Secure System Development', 'year' => 3],
            ['name' => 'Compiler Technology', 'year' => 3],
            ['name' => 'Fudamentals of IoT', 'year' => 3],
            ['name' => 'Embedded Systems I', 'year' => 3],
            ['name' => 'ICT Entrepreneurship', 'year' => 3],
            ['name' => 'Python Programming', 'year' => 3],
            ['name' => 'Internet Programming and Application II', 'year' => 3],
            ['name' => 'Mathematical Logic and Formal Semantics', 'year' => 3],
            ['name' => 'Computer Graphics', 'year' => 3],
            
            // Year 4
            ['name' => 'ICT project Management', 'year' => 4],
            ['name' => 'Cloud Computing', 'year' => 4],
            ['name' => 'Big Data Analytics', 'year' => 4],
            ['name' => 'Information Security', 'year' => 4],
            ['name' => 'Software Engineering Project', 'year' => 4],
            ['name' => 'Software Deployment and Management', 'year' => 4],
            ['name' => 'Artificial Intelligence', 'year' => 4],
            ['name' => 'Foundations of Data Science', 'year' => 4],
            ['name' => 'Digital Image Processing', 'year' => 4],
            ['name' => 'Semantic Web and Social Network', 'year' => 4],
            ['name' => 'System Administration and Management', 'year' => 4],
            ['name' => 'Professinal Ethics and Conduct', 'year' => 4],
            ['name' => 'Computer Maintenance', 'year' => 4],
            ['name' => 'Human Computer Interaction', 'year' => 4],
            ['name' => 'Programming', 'year' => 4],
            ['name' => 'Software Reverse Engineering', 'year' => 4],
            ['name' => 'Electronic and Mobile Commerce', 'year' => 4],
            ['name' => 'Multimedia Content  Development', 'year' => 4],
            ['name' => 'Distributed Computing', 'year' => 4],
        ]);
    }
    }

