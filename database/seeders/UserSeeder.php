<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'nama' => 'admin',
            'nomor_identitas' => '3571',
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin'),
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        User::create([
            'id' => 2,
            'nama' => 'pegawai',
            'nomor_identitas' => '3572',
            'username' => 'pegawai',
            'email' => 'pegawai@example.com',
            'password' => Hash::make('pegawai'),
            'role' => 'pegawai',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        User::create([
            'id' => 3,
            'nama' => 'masyarakat',
            'nomor_identitas' => '3573',
            'username' => 'masyarakat',
            'email' => 'masyarakat@example.com',
            'password' => Hash::make('masyarakat'),
            'role' => 'masyarakat',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
