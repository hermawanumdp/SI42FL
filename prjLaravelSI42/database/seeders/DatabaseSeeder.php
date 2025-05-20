<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Prodi;

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

        Prodi::create(
            [
                'nama' => 'Informatika'
            ]
        );

        Prodi::create(
            [
                'nama' => 'Sistem Informasi'
            ]
        );

        Prodi::create(
            [
                'nama' => 'Komputerisasi Akuntansi'
            ]
        );
    }
}
