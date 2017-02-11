<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Mein Kampf
        DB::table('books')->insert([
        	'title' => 'Mein Kampf',
        	'description' => 'Anti-semitic book',
        	'price' => 100.00,
        	'owner_id' => 1
        ]);

        // Series of Unfortunate Events
        DB::table('books')->insert([
        	'title' => 'A Series of Unfortunate Events',
        	'description' => 'A story about an orphans',
        	'price' => 150.00,
        	'owner_id' => 2
        ]);

        // Harry Potter
        DB::table('books')->insert([
        	'title' => 'Harry Potter and the Philosopher\'s Stone',
        	'description' => 'First Harry Potter book',
        	'price' => 200.00,
        	'owner_id' => 1
        ]);

    }
}
