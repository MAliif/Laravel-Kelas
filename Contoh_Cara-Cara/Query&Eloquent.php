<?php
// HARUS DI CONTROLLER BIAR JALAN!!

class StudentController extends Controller
{
    public function index() 
    //"index ()" nama buat web yang di route
    {
        // Query Builder
        // Menampilkan data melalui code "dd"
        $student = DB::table('alifs')->get();

        // Query Builder (kalo masuk website maka data nya akan bertambah di table di database)
        DB::table('alifs')->insert([
            'name' => 'query builder hehe',
            'gender' => 'L',
            'nis' => '2897653',
            'class_id' => 1
        ]);

        DB::table('alifs')->where('id', 17)->update([
            'name' => 'query mengganti',
            "class_id" => 3
        ]);

        DB::table('alifs')->where('id', 6)->delete();

        // Eloquent
            // "Student" nama model
            $student = Student::all();
        // "Student" model
        Student::create([
            'name' => 'eloquent',
            'gender' => 'P',
            'nis' => '9897222',
            'class_id' => 2
        ]);
        Student::find(16)->update([
            'name' => 'cantik banget',
            'gender' => "P"
        ]);
        Student::find(8)->delete();

        // menampilkan isinya dalam bentuk sistem
        dd($student);
    }
}

?>