<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(BooksTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
    }
}
