<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Pasien;
use App\Models\Pendonor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'nama' => 'Falqi',
            'username' => 'admin',
            'password' => bcrypt('123'),
            'role' => 'super admin',
        ]);
        Pendonor::create([
            'nama' => 'M Ferry Fian Hakim',
            'username' => 'ferry',
            'password' => bcrypt('123'),
            'alamat' => 'Jana Peria',
            'nomor_hp' => '087866864828',
            'stok_darah' => '4',
            'golongan_darah' => 'B',
        ]);
        Pasien::create([
            'nama' => 'Umar Bakri',
            'alamat' => 'Suela',
            'no_wa' => '087866864828',
            'golongan_darah' => 'B',
            'stok_darah' => '3',
        ]);
    }
}
