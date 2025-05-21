<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Super Admin
        User::create([
            'name' => 'Pak Joko',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'super_admin',
        ]);

        // Admin Dinas Contoh
        $dinas = [
            ['name' => 'Admin Dinas Kominfo', 'nama_dinas' => 'Dinas Kominfo', 'email' => 'diskominfo@example.com', 'role' => 'admin_dinas'],
            ['name' => 'Admin Dinas Setdako', 'nama_dinas' => 'Dinas Setdako', 'email' => 'setdako@example.com', 'role' => 'admin_dinas'],
            ['name' => 'Admin Dinas Inspektorat', 'nama_dinas' => 'Dinas Inspektorat', 'email' => 'inspektorat@example.com', 'role' => 'admin_dinas'],
            ['name' => 'Admin Dinas BKPSDM', 'nama_dinas' => 'Dinas BKPSDM', 'email' => 'bkpsdm@example.com', 'role' => 'admin_dinas'],
            ['name' => 'Admin Dinas Bappeda', 'nama_dinas' => 'Dinas Bappeda', 'email' => 'bappeda@example.com', 'role' => 'admin_dinas'],
            ['name' => 'Admin Dinas BKD', 'nama_dinas' => 'Dinas BKD', 'email' => 'bkd@example.com', 'role' => 'admin_dinas'],
            ['name' => 'Admin Dinas Perpustakaan', 'nama_dinas' => 'Dinas Perpustakaan', 'email' => 'perpustakaan@example.com', 'role' => 'admin_dinas'],
            ['name' => 'Admin Dinas DPMPTSP', 'nama_dinas' => 'Dinas DPMPTSP', 'email' => 'dpmptsp@example.com', 'role' => 'admin_dinas'],
            ['name' => 'Admin Dinas Disdukcapil', 'nama_dinas' => 'Dinas Dukcapil', 'email' => 'disdukcapil@example.com', 'role' => 'admin_dinas'],
            ['name' => 'Admin Dinas Kesehatan', 'nama_dinas' => 'Dinas Kesehatan', 'email' => 'kesehatan@example.com', 'role' => 'admin_dinas'],
            ['name' => 'Admin Dinas Sosial', 'nama_dinas' => 'Dinas Sosial', 'email' => 'sosial@example.com', 'role' => 'admin_dinas'],
        ];

        // Admin Operator
        User::create([
            'name' => 'Pak Andri',
            'email' => 'andri@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'operator',
        ]);

        foreach ($dinas as $data) {
            User::create([
                'name' => $data['name'],
                'nama_dinas' => $data['nama_dinas'],
                'email' => $data['email'],
                'password' => Hash::make('password'),
                'role' => $data['role'],
            ]);
        }
    }
}