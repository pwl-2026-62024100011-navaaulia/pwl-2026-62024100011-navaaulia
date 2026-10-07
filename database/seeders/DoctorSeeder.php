<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Doctor::create([
            'doctor_code' => 'D001',
            'name' => 'dr. Ahmad Fauzan',
            'specialization' => 'Dokter Umum',
            'phone' => '081234567801',
            'is_active' => true,
        ]);

        Doctor::create([
            'doctor_code' => 'D002',
            'name' => 'dr. Siti Aminah',
            'specialization' => 'Penyakit Dalam',
            'phone' => '081234567802',
            'is_active' => true,
        ]);

        Doctor::create([
            'doctor_code' => 'D003',
            'name' => 'dr. Budi Santoso',
            'specialization' => 'Anak',
            'phone' => '081234567803',
            'is_active' => true,
        ]);

        Doctor::create([
            'doctor_code' => 'D004',
            'name' => 'dr. Rina Wulandari',
            'specialization' => 'Kandungan',
            'phone' => '081234567804',
            'is_active' => true,
        ]);

        Doctor::create([
            'doctor_code' => 'D005',
            'name' => 'dr. Dedi Kurniawan',
            'specialization' => 'Bedah',
            'phone' => '081234567805',
            'is_active' => false,
        ]);

        Doctor::create([
            'doctor_code' => 'D006',
            'name' => 'dr. Lina Permata',
            'specialization' => 'Mata',
            'phone' => '081234567806',
            'is_active' => true,
        ]);

        Doctor::create([
            'doctor_code' => 'D007',
            'name' => 'dr. Eko Prasetyo',
            'specialization' => 'Gigi',
            'phone' => null,
            'is_active' => true,
        ]);

        Doctor::create([
            'doctor_code' => 'D008',
            'name' => 'dr. Maya Sari',
            'specialization' => 'Kulit',
            'phone' => null,
            'is_active' => false,
        ]);
    }
}