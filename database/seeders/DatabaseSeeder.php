<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Memasukkan data perusahaan pertama
        DB::table('companies')->insert([
            'companyname' => 'Perusahaan A',
            'address' => 'Alamat Perusahaan A',
            'latitude' => -6.2088,
            'longitude' => 106.8456,
            'costcenter' => 'Cost Center 1',
            'jam_start' => '08:00:00',
            'jam_end' => '17:00:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Memasukkan data pengguna untuk perusahaan pertama
        DB::table('users')->insert([
            'name' => 'User1',
            'address' => 'Alamat Pengguna 1',
            'email' => 'user1@example.com',
            'password' => Hash::make('password1'),
            'jkelamin' => 'Laki-laki',
            'jabatan' => 'Posisi Pengguna 1',
            'departmen' => 'Departemen Pengguna 1',
            'role' => 'user',
            'status' => 'Aktif',
            'companyid' => 1,
            'costcenter' => 'Cost Center 1', // Sesuaikan dengan cost center yang sesuai
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'HRD',
            'address' => 'Alamat HRD',
            'email' => 'hrd@example.com',
            'password' => Hash::make('password2'),
            'jkelamin' => 'Perempuan',
            'jabatan' => 'HRD',
            'departmen' => 'HRD',
            'role' => 'hrd',
            'status' => 'Aktif',
            'companyid' => 1,
            'costcenter' => 'Cost Center 1', // Sesuaikan dengan cost center yang sesuai
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Memasukkan data perusahaan kedua
        DB::table('companies')->insert([
            'companyname' => 'Perusahaan A',
            'address' => 'Alamat Perusahaan A',
            'latitude' => -6.2088,
            'longitude' => 106.8456,
            'costcenter' => 'Cost Center 2',
            'jam_start' => '08:00:00',
            'jam_end' => '17:00:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Memasukkan data pengguna untuk perusahaan kedua
        DB::table('users')->insert([
            'name' => 'User2',
            'address' => 'Alamat Pengguna 2',
            'email' => 'user2@example.com',
            'password' => Hash::make('password3'),
            'jkelamin' => 'Laki-laki',
            'jabatan' => 'Posisi Pengguna 2',
            'departmen' => 'Departemen Pengguna 2',
            'role' => 'user',
            'status' => 'Aktif',
            'companyid' => 2,
            'costcenter' => 'Cost Center 2', // Sesuaikan dengan cost center yang sesuai
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'HRD2',
            'address' => 'Alamat HRD 2',
            'email' => 'hrd2@example.com',
            'password' => Hash::make('password4'),
            'jkelamin' => 'Perempuan',
            'jabatan' => 'HRD',
            'departmen' => 'HRD',
            'role' => 'hrd',
            'status' => 'Aktif',
            'companyid' => 2,
            'costcenter' => 'Cost Center 2', // Sesuaikan dengan cost center yang sesuai
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

