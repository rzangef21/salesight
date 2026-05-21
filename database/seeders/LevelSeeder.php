<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('level')->insert([
            [
                'level_kode' => 'OWN',
                'level_nama' => 'Owner',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level_kode' => 'ADM1',
                'level_nama' => 'Admin1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level_kode' => 'ADM2',
                'level_nama' => 'Admin2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level_kode' => 'ADM3',
                'level_nama' => 'Admin3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level_kode' => 'ADM4',
                'level_nama' => 'Admin4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level_kode' => 'ADM5',
                'level_nama' => 'Admin5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level_kode' => 'ADM6',
                'level_nama' => 'Admin6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
