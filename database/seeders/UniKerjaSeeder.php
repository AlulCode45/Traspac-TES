<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('unit_kerjas')->insert([
            [
                'unit_kerja' => 'Kantor Pusat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'unit_kerja' => 'Kantor Wilayah Jakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'unit_kerja' => 'Kantor Wilayah Bandung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'unit_kerja' => 'Kantor Wilayah Surabaya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'unit_kerja' => 'Kantor Cabang Medan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'unit_kerja' => 'Kantor Cabang Makassar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'unit_kerja' => 'Dinas Provinsi Jawa Barat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'unit_kerja' => 'Dinas Provinsi Jawa Timur',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'unit_kerja' => 'Bagian Keuangan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'unit_kerja' => 'Bagian Administrasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
