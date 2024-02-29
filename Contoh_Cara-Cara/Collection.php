<?php
// HARUS DI CONTROLLER!!
// Gunanya "all()" buat nampilin lewat "dd()" lebih bersih doang tampilannya lebih dikit

/* 
|  Collection Gunanya mirip excel, dan fungsi fungsinya :
| 
|  ~ Contains gunannya untuk mengecek apakah ada nomor atau huruf disana (True/False)
|  ~ Diff untuk mengecek data yang gak ada di array lain
|  ~ Filter untuk memunculkan data yang lebih atau kurang dari, intinya tergantung operasi penilaiannya
|  ~ Pluck untuk memunculkan array dari sebuah data yang ada columnya
|  ~ Map untuk mengalikan atau nilai operasi lainnya untuk semua data di array
*/ 

class StudentController extends Controller
{
    public function index() 
    //"index ()" nama buat web yang di route
    {
        // Array 
        $nilai = [1,2,3,4,5,6,7,8,9];

        // Collector
        $nilairata = collect($nilai)->avg();
        dd($nilai, $nilairata);      


        // Contains
        $nilaicontains = collect($nilai)->contains(10);
        dd($nilai, $nilaicontains);  
            // Kalo mau ngitung angka antara pake function
            $nilaicontains = collect($nilai)->contains(function($keren){
                return $keren < 5;
            });
        

        // Diff
        $nilai1 = [1,2,3,4,5,6,7,8,9];
        $nilai2 = [1,14,3,13,5,12,7,11,9];
        
        // Yang artinya angka yang ada di "$nilai1" gak ada di "$nilai2"
        $diff1 = collect($nilai1)->diff($nilai2);
        // Yang artinya angka yang ada di "$nilai2" gak ada di "$nilai1"
        $diff2 = collect($nilai2)->diff($nilai1);

        dd($nilai1, $nilai2, $diff1, $diff2);    


        // Filter
        $nilai = [1,2,3,4,5,6,7,8,9];

        $nilaifilter = collect($nilai)->filter(function($keren){
            return $keren > 5;
        })->all();  

        dd($nilai, $nilaifilter);


        // Pluck
        $biodata = [
            ['nama' => 'Alif', 'umur' => '10'],
            ['nama' => 'Alif1', 'umur' => '11'],
            ['nama' => 'Alif2', 'umur' => '12'],
            ['nama' => 'Alif3', 'umur' => '13'],
        ];

        $pluck = collect($biodata)->pluck('nama')->all();
        dd($pluck);


        // Map
        $map = collect($nilai)->map(function($bebas){
            return $bebas * 2;
        })->all();

        dd($map);
    }
}