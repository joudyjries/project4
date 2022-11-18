<?php

namespace Database\Seeders;

use App\Models\visitors;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456789'),
            'role' =>  'super_admin',
        ]);

        visitors::create(['count' => 1]);
    }
}
