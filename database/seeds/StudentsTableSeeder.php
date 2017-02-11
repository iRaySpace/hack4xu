<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add Ivan Student
        DB::table('students')->insert([
        	'fname' => 'Ivan Ray',
        	'lname' => 'Altomera',
        	'college' => 'College of Computer Studies',
        	'course' => 'Bachelor of Science in Computer Science',
        	'cont_number' => '09351659770'
        ]);

        // Add new student
        DB::table('students')->insert([
        	'fname' => 'Caryl Grace',
        	'lname' => 'Altomera',
        	'college' => 'School of Business and Management',
        	'course' => 'Bachelor of Science in Accountancy',
        	'cont_number' => '09268797567'
        ]);

        // add new student
        DB::table('students')->insert([
        	'fname' => 'Raphael Erick',
        	'lname' => 'Marcial',
        	'college' => 'College of Computer Studies',
        	'course' => 'Bachelor of Science in Computer Science',
        	'cont_number' => '09359625022'
        ]);

    }

}