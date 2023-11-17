<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    
         \App\Models\User::factory()->create([
	        'name' => 'demo',	
            'first_name' => 'demo',
            'last_name' => 'demo',
            'email' => 'demo@demo.com',
            'password' => bcrypt('demo')
        ]);

        \App\Models\Team::factory()->create([
	        'name' => 'Team1',            
        ]);
        
        \App\Models\Team::factory()->create([
	        'name' => 'Team2',            
        ]);

        \App\Models\TeamUser::factory()->create([
            'team_id' => 1,
	        'user_id' => 1            
        ]);


        //\App\Models\User::factory()->count(500)->create();
        //\App\Models\Employee::factory()->count(11500)->create();



    }
}
