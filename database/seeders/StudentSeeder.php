<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Carbon\Carbon;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Schema::disableForeignKeyConstraints();
        // Student::truncate();
        // Schema::enableForeignKeyConstraints();

        // // Kalo ingin datanya banyak
        // $data = [
        //     // "class_id" udah dari table "classalifs", jadi tinggal ganti nomor sesuai urutan kelas yang ingin dipilih
        //     ['name' => 'Alif', 'gender' => 'L', 'nis' => '01', 'class_id' => 2],
        //     ['name' => 'Heriz', 'gender' => 'L', 'nis' => '02', 'class_id' => 3],
        //     ['name' => 'Nisa', 'gender' => 'P', 'nis' => '03', 'class_id' => 1],
        //     ['name' => 'Rafa', 'gender' => 'P', 'nis' => '04', 'class_id' => 4],
        //     ['name' => 'Fisal', 'gender' => 'L', 'nis' => '05', 'class_id' => 3]
        // ];

        // foreach ($data as $value) {
        //     // "classroom" nama model
        //     Student::insert([
        //     // command nya harus sesuai dengan colomn
        //     'name' => $value['name'],
        //     'gender' => $value['gender'],
        //     'nis' => $value['nis'],
        //     'class_id' => $value['class_id'],
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        //     ]);
        // }

        // Kalo mau nambah data tinggal tambah "count()"
        Student::factory()->count(200)->create();
    }
}
