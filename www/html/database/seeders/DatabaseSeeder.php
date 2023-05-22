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
         \App\Models\Admin::factory()->create([
             'first_name' => 'Rafal',
             'last_name' => 'Zygadło',
             'email' => 'qotsa@op.pl',
             'password' => bcrypt('password')
         ]);

         \App\Models\User::factory()->create([
            'first_name' => 'demo',
            'last_name' => 'demo',
            'email' => 'demo',
            'password' => bcrypt('demo')
        ]);


        //\App\Models\User::factory()->count(500)->create();
        //\App\Models\Employee::factory()->count(11500)->create();



    }
}
