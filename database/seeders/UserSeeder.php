<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert(
            [
                'name' => 'Aashish',
                'email' => 'aashish@gmail.com',
                'password' => Hash::make('Aashish@123'),
            ],
        );
        User::insert(
            [
                'name' => 'Vikas',
                'email' => 'vikas@gmail.com',
                'password' => Hash::make('Vikas@123'),
            ],
        );
    }
}
