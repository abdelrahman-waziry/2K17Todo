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

    	$user = [
    		[
    			'name'	=> 'Admin',
    			'password'	=> 'Admin'
    		]
    	];

    	$user_db = \App\User::create([
    		'name'	=> $user['name'],
    		'password'	=> $user['password']
    	]);

        $priorities = [
        	[
        		'name'  => 'High Priority'
        	],
        	[
        		'name'  => 'Normal Priority'
        	],
        	[
        		'name'  => 'Low Priority'
        	]
        ]; 

        foreach ($priorities as $priority) {
        	$priority_db = \App\Priority::create([
        		'name'	=> $priority['name']
        	]);
        }

        $types = [
        	[
        		'name'	=> 'Task',
        		'desc'	=> 'Normal tasks of your daily routine 📌'
        	],
        	[
        		'name'	=> 'Reminder',
        		'desc'	=> 'Just like your normal phone ⏰ but filled with emojis'
        	]
        ];

        foreach ($types as $type) {
        	$type_db = \App\Type::create([
        		'name'	=> $type['name'],
        		'desc'	=> $type['desc']
        	]);
        }
    }
}
