<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('reseps')->insert([
            'id_kategori' => 1,
            'id_user' => 1,
            'title' => 'Nasi Goreng',
            'bahan' => 'Nasi, telur, dan bawang putih',
            'metode' => 'Panaskan minyak, tumis bawang putih hingga harum. Masukkan nasi dan aduk rata. Tambahkan air, masak hingga matang. Angkat dan sajikan.',
            'energy' => 100,
            'karbo' => 20,
            'protein' => 10,
            'created_at' => now(),
        ],);
        DB::table('reseps')->insert([
            'id_kategori' => 2,
            'id_user' => 1,
            'title' => 'Es Teh',
            'bahan' => 'Teh, air, dan gula',
            'metode' => 'Masukkan semua bahan ke dalam gelas, aduk rata. Sajikan.',
            'energy' => 100,
            'karbo' => 20,
            'protein' => 10,
            'created_at' => now(),
        ]);
    }
}
