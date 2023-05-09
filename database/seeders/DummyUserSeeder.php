<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('admin')
            ],
            [
                'name' => 'Teller',
                'email' => 'teller1@gmail.com',
                'role' => 'teller',
                'password' => bcrypt('teller')
            ],
            [
                'name' => 'Teller',
                'email' => 'teller2@gmail.com',
                'role' => 'teller',
                'password' => bcrypt('teller')
            ],
            [
                'name' => 'Teller',
                'email' => 'teller3@gmail.com',
                'role' => 'teller',
                'password' => bcrypt('teller')
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
