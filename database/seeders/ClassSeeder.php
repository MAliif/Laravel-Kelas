<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Harus ngasih tau modelsnya
use App\Models\ClassRoom;
// Harus pake carbon kalo mau ngejalanin waktu sekarang
use Carbon\Carbon;
// Pake Schema juga
use Illuminate\Support\Facades\Schema;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        ClassRoom::truncate();
        Schema::enableForeignKeyConstraints();

        // Kalo ingin datanya banyak
        $data = [
            ['name' => 'Farmasi'],
            ['name' => 'RPL'],
            ['name' => 'TKJ'],
            ['name' => 'OTF'],
        ];

        foreach ($data as $value) {
            // "classroom" nama model
            classroom::insert([
            // command nya harus sesuai dengan colomn
            'name' => $value['name'],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]);
        }
    }
}
