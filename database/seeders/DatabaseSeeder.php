<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Participation::factory(10)->create();
        \App\Models\User::factory(1)->create();
        \App\Models\Content::factory(1)->create();
        \App\Models\Calendar::factory(10)->create();
        \App\Models\Pcontent::factory(1)->create();
        \App\Models\Acontent::factory(1)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
