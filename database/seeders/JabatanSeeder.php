<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jabatans')->insert([
            [
                'jabatan' => 'Sekretaris Jenderal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jabatan' => 'Direktur Jenderal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jabatan' => 'Deputi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jabatan' => 'Kepala Dinas Provinsi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jabatan' => 'Kepala Dinas Kabupaten/Kota',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jabatan' => 'Kepala Bidang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jabatan' => 'Kepala Seksi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jabatan' => 'Kepala Sub Bagian',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jabatan' => 'Pelaksana Teknis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
