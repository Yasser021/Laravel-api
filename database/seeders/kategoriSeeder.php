<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('kategoris')->insert([
            'name' => 'Makanan',
            'created_at' => now(),
        ]);
        DB::table('kategoris')->insert([
            'name' => 'Minuman',
            'created_at' => now(),
        ]);
    }
}
