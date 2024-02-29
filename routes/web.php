<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ExtrakulikulerController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\PesanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Kalo mau ganti database setting nya dari ".env"
| Kalo mau namain migration usahain akhirnya pake "s"
| Eloquent Relationship, contohnya
  - Lazy load (Request data dari php admin)
  - Eager load (Sama cuman lebih singkat dan spesifik karena pake "with()->get()")

  memunculkan relationship, contohnya table a punya makanan sedangkan tabel b nomor makanan
  nanti tabel b akan memunculkan nama makanan sesuai nomornya
  caranya harus ke controller "namanya::with('nama function di student')->get();"
| Kalo mau bikin form action <form action="studont" method="post"> 'studont' nya harus sesuai sama
  linknya yang route web dan pake '@csrf' setelah <form>
| 
|
| Command :
| - php artisan serve (menjalankan website server laravel)
| - php artisan migrate (ketuk palu, kaya command untuk melakukan perubahan pada laravel)
| - php artisan migrate:rollback (untuk mengulang command perintah, makanya scriptnya harus ada function down)
| - php artisan make: "nama format" "nama file (kalo migration pake in_namatable_table)
| - php artisan db:seed --class="nama seedernya" (Nama seedernya yang ingin dijalanin, tanpa nama seeder nya akan menjalankan "DatabaseSeeder")
| 
| ~ Seeder mirip migration tapi itu SQL, kalo migration ada rollbacknya biar bisa diulang lagi
    jadi cuman sekali doang. Kalo ada data yang udah ada scriptnya gak bakal jalan
| ~ DatabaseSeeder gunannya untuk menjalankan seeder yang sudah ditulis di "call", jadi menjalankan semua seeder dalam satu perintah
| ~ Factory scriptnya "seeder" jadi buat bikin banyak data
| ~ Foreach untuk memanggil data dari database, dan untuk perulangan dari database
| ~ Controller ngatur blade atau view (Nyari filenya di app\Http\Controller)
| ~ Collection untuk mempermudah sistemnya kaya excel, bisa ngitung/kalo/bagi sama komputer
| ~ Model gunannya nyambungin table dari database
| ~ Migration buat bikin script gitu, tapi khusus buat table. Dan bisa di ulang lagi dengan menggunakan 
|   rollback
| ~ Query Builder dan Eloquent, bedanya adalah Eloquent codenya lebih singkat sama aja tetep buat sql
     dan Query / Eloquent harus terconect dengan sebuah website supaya kalo direfresh sql nya jalan
     kalo querry harus pake DB::table('namatable') -> bla bla
     kalo eloquent namamodel::find(nomorID)-> bla bla
     commandnnya "update", "where", "delete"
| ~ Flash Message hanya hiasan pemberitahuan gitu
| ~ Request gunanya buat Flash Message juga karena berkaitan untuk mengubah isi Flash Message 
|
| dd() = untuk menapilkan data dalam bentuk sistem
| foreach () = gunannya manggil data dari controller
| all () = untuk menampilkan semua data, bisa dari database
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'name' => 'Muhammad Alif Mauladi',
        'role' => 'Admin',
        'tugas' => ['designer', 'scripter', 'map_maker', 'asset_maker', 'music']
    ]);
});

// ------------------------- Students Route -----------------------------------
Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/{id}', [StudentController::class, 'show']);

Route::get('/students-add', [StudentController::class, 'add']);
Route::post('/studont', [StudentController::class, 'store']);

Route::get('/student-edit/{id}', [StudentController::class, 'edit']);
Route::put('/stupdate/{id}', [StudentController::class, 'update']);

Route::get('/studelete/{id}', [StudentController::class, 'delete']);
Route::delete('/studestroy/{id}', [StudentController::class, 'destroy']);
Route::get('/studelere', [StudentController::class, 'history']);
Route::get('/stulon/{id}/restore', [StudentController::class, 'restore']);

// ------------------------- Class Route ----------------------------------------
Route::get('/class', [ClassController::class, 'index']);
Route::get('/class-detail/{id}', [ClassController::class, 'show']);

// ------------------------- Extrakulikuler Route -------------------------------
Route::get('/extrakulikuler', [ExtrakulikulerController::class, 'index']);
Route::get('/eskul-detail/{id}', [ExtrakulikulerController::class, 'show']);

// ------------------------- Teachers Route -------------------------------------
Route::get('/teachers', [TeacherController::class, 'index']);
Route::get('/teachers-detail/{id}', [TeacherController::class, 'show']);

Route::get('/pesan', [PesanController::class, 'index']);