<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'type'  => 'a',
            'password' => Hash::make('password'), 
        ]);
        User::create([
            'name' => 'user 1',
            'email' => 'user1@user.com',
            'type'  => 'u',
            'password' => Hash::make('password'), 
        ]);
        User::create([
            'name' => 'user 2',
            'email' => 'user2@user.com',
            'type'  => 'u',
            'password' => Hash::make('password'), 
        ]);
        User::create([
            'name' => 'user 3',
            'email' => 'user3@user.com',
            'type'  => 'u',
            'password' => Hash::make('password'), 
        ]);
    }
}
