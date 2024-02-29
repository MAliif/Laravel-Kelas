@extends('layout.mainlayout')
@section('title', 'Students')
@section('content')

<h2>Anda melihat data dari siswa <b>{{$studentTEZT->name}}</b></h2>

<div class="mt-5 mb-5">
<table class="table table-bordered">
    <tr>
        <th>NIS</th>
        <th>Gender</th>
        <th>Kelas</th>
        <th>Homeroom Teacher</th>
    </tr>
    <tr>
        <td>{{$studentTEZT->nis}}</td>
        <td>
            @if ($studentTEZT->gender == 'P')
                Perempuan
            @else
                Laki Laki
            @endif
        </td>
        <td>{{$studentTEZT->class->name}}</td>
        <td>{{$studentTEZT->class->homeroomTeacher->name}}</td>
    </tr>
</table>
</div>

<div>
    <h3>Extrakulikulers</h3>
    <ol>
        @foreach ($studentTEZT->extrakulikulers as $item)
            <li>{{$item->name}}</li>
        @endforeach
    </ol>
</div>

<style>
    th {
        width:25%;
    }
</style>

@endsection