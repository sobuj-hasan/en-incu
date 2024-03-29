<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'enincu@gmail.com',
            'role' => 1,
            'phone' => Str::random(10),
            'email_verified_at' => now(),
            'password' => Hash::make('enincu'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Mr John',
            'email' => 'user@mail.com',
            'role' => 0,
            'phone' => Str::random(10),
            'email_verified_at' => now(),
            'password' => Hash::make('user'),
            'remember_token' => Str::random(10),
        ]);
    }
}
