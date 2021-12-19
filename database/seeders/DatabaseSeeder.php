<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        $this->call(ProductSeeder::class);
        User::create([
            'name' => 'admin',
            "email" => "admin@test.com",
            "password" => Hash::make("password"),
            "is_admin" => 1
        ]);
    }
}
