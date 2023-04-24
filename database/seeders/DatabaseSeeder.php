<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;//the model to use
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(5)->create();

         Listing::create([
            'title' => 'Laravel Senior Developer',//name of coloumns should be the same to the ones in database
            'tags' => 'laravel, javascript',
            'company' => 'Acem Corp',
            'location' => 'Boston, MA',
            'email' => 'mutungaericrfrf@gmail.com',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error dolores nulla vitae maxime nihil totam dolor, consectetur ducimus placeat? Esse culpa tempora tempore eos earum excepturi cum, iste aliquam et.'


         ]);

         Listing::create([
            'title' => 'Ful Senior Developer',
            'tags' => 'laravel, html',
            'company' => 'Acem Bank',
            'location' => 'Boston, MK',
            'email' => 'rfrf@gmail.com',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error dolores nulla vitae maxime nihil totam dolor, consectetur ducimus placeat? Esse culpa tempora tempore eos earum excepturi cum, iste aliquam et.'


         ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

