<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'level_id' => 1,
                'username' => 'alifia@gmail.com',
                'nama' => 'Alifia Azzahra',
                'password' => '12345',
            ],
            [
                'level_id' => 2,
                'username' => 'reza@gmail.com',
                'nama' => 'Reza Angelina',
                'password' => '12345',
            ],
            [
                'level_id' => 3,
                'username' => 'bagas@gmail.com',
                'nama' => 'Bagas Nusa',
                'password' => '12345',
            ],
            [
                'level_id' => 4,
                'username' => 'rafif@gmail.com',
                'nama' => 'Rafif',
                'password' => '12345',
            ],
            [
                'level_id' => 5,
                'username' => 'budi@gmail.com',
                'nama' => 'Vio',
                'password' => '12345',
            ],
            [
                'level_id' => 6,
                'username' => 'desi@gmail.com',
                'nama' => 'Desi',
                'password' => '12345',
            ],
        ];

        foreach ($users as $user) {
            DB::table('user')->updateOrInsert(
                ['username' => $user['username']],
                [
                    'level_id' => $user['level_id'],
                    'nama' => $user['nama'],
                    'password' => Hash::make($user['password']),
                    'updated_at' => now(),
                    'created_at' => now(),
                ]
            );
        }
    }
}
