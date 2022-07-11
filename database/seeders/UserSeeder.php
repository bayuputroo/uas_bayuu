<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        $user = [
            [
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'user',
                'email' => 'user@example.com',
                'password' => bcrypt('123456'),
            ],
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}