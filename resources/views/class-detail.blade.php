@extends('layout.mainlayout')
@section('title', 'Classroom')
@section('content')

<h2>Anda melihat data kelas dari <b>{{$kelaskeren->name}}</b></h2>
<div class="mt-5">
    <h4>HomeRoom Teacher : <b>{{$kelaskeren->homeroomTeacher->name}}</b></h4>
</div>
<div class="mt-5">
    <h4>List Siswa :</h4>
    <ol>
        @foreach ($kelaskeren->studentsalif as $item)
            <li> {{$item->name}} </li>
        @endforeach
    </ol>
</div>

@endsection