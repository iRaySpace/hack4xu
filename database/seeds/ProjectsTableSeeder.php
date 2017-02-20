<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
        //
    	DB::table('projects')->insert([
    		'name' => 'XU Festival Days 2017',
    		'description' => 'The most awaited event',
    		'venue' => 'XU Main Campus',
    		'status' => 'Not Submitted',
    		'budget_cost' => 500000.00,
    		'ph_id' => 1
    	]);

    	// OrSEM event
    	DB::table('projects')->insert([
    		'name' => 'XU OrSEM 2017',
    		'description' => 'Let\'s get the juniors get going!',
    		'venue' => 'XU Main Campus',
    		'status' => 'Not Submitted',
    		'budget_cost' => 250000.00,
    		'ph_id' => 1
    	]);

    }

}