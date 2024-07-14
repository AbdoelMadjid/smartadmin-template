<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('app_profiles')->insert([
            [
                'app_nama' => 'SmartAdmin',
                'app_deskripsi' => 'Dashboard yang bisa di gunakan untuk manajemen aplikasi',
                'app_tahun' => 2019,
                'app_pengembang' => 'SmartAdmin',
                'app_icon' => 'favicon-32x32.png',
                'app_logo' => 'logo.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lainnya sesuai kebutuhan
        ]);
    }
}
