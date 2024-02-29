<?php

namespace App\Http\Controllers;
use Session;
use App\Models\ClassRoom;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Student;
use App\Http\Requests\MuridCreateRequest;
use Doctrine\DBAL\Types\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    // INTINYA yang ada di "with()" ngambil function dari model yaa dan HARUS SESUAI DARI MODEL YANG DIAMBIL
    // FUNCTIONNYA

    public function index(Request $request) 
    //"index ()" nama buat web yang di route
    {
        $keyword = $request->Keyword;
        
        // "Simplepaginate" cuman next dan previous sedangkan "paginate" ada angka halamannya biar cepet
        $student = Student::with('class')->
                            where('name', 'Like', '%'.$keyword.'%')->
                            orWhere('gender', $keyword)->
                            orWhere('nis', 'Like', '%'.$keyword.'%')->
                            orWhereHas('class', function($query) use ($keyword) {
                                $query->where('name', 'Like', '%'.$keyword.'%');
                            })->
                            paginate(15);
        // with(['class.homeroomTeacher', 'extrakulikulers'])
        return view('student', ['studentList' => $student]);
    }

    public function show($id) 
    {
       // "with(['class'])" dari model student
       $student = Student::with(['class.homeroomTeacher', 'extrakulikulers'])->findOrFail($id);
       return view('student-detail', ['studentTEZT' => $student]);
    }

    // ---------------------  KHUSUS CREATE YAA....  --------------------------------
    public function add() 
    //"index ()" nama buat web yang di route
    {
        $class = ClassRoom::select('id', 'name')->get();
        return view('student-add', ['class' => $class]);
    }

    // "MuridCreateRequest" dari file request
    public function store(MuridCreateRequest $request)
    {
        // JIKA NIS NYA SAMA MAKA AKAN KELUAR PERINGATAN
        // kenapa max:9 ? kan max nya 10, SOALNAYA KALO 10 BAKAL ERROR LARAVELNYA 
        // CARA MANUALNYA :

        // $validated = $request->validate([
        //     'nis' => 'unique:alifs|max:9',
        //     'name' => 'max:30'
        // ]);

        $student = Student::create($request->all());
        // CUMAN BUAT HIASAN
        if($student) {
            Session::flash('status', 'success');
            Session::flash('message', 'Add new Student Success!');
        }
        return redirect('/students');
    }
    
    // ---------------------  KHUSUS EDIT YAA....  --------------------------------
    public function edit(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $class = Classroom::where('id', '!=', $student->class_id)->get(['id', 'name']);
        return view('student-edit', ['wow' => $student, 'via' => $class]);
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->update($request->all());
        return redirect('/students');
    }

    // ---------------------  KHUSUS Delete YAA....  --------------------------------
    public function delete($id)
    {
        $student = Student::findOrFail($id);
        return view('student-delete', ['wowhebat' => $student]);
    }

    public function destroy($id)
    {
        $deletemurid = Student::findOrFail($id);
        $deletemurid->delete();

        if($deletemurid) {
            Session::flash('status', 'danger');
            Session::flash('message', 'Delete Student Success!');
        }

        // DB::table('alifs')->where('id', $id)->delete();
        return redirect('/students');
    }

    public function history() 
    {
        $history = Student::onlyTrashed()->get();
        return view('student-delete-list', ['wowhebat' => $history]);
    }

    public function restore($id) 
    {
        $tuer = Student::withTrashed()->where('id', $id)->restore();

        if($tuer) {
            Session::flash('status', 'danger');
            Session::flash('message', 'Restore Student Success!');
        }

        return redirect('/students');
    }
}
