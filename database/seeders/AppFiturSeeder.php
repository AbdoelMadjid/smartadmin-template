<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppFiturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Data = [
            [
                'nama_fitur' => '_app_settings',
                'aktif' => 'Y',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_fitur' => '_app_shortcuts',
                'aktif' => 'Y',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_fitur' => '_app_message',
                'aktif' => 'Y',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_fitur' => '_app_notification',
                'aktif' => 'Y',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert data into the 'fitur' table
        DB::table('app_fiturs')->insert($Data);
    }
}
