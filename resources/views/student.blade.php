@extends('layout.mainlayout')
@section('title', 'Students')
@section('content')

<h1>Student List</h1>
<div class="my-5 d-flex justify-content-between">
    <a href="/students-add" class="btn btn-warning"><b>Add Data</b></a>
    <a href="/studelere" class="btn btn-dark text-white-50"><b>Show History Delete</b></a>
</div>

@if(Session::has('status'))
<div class="alert alert-success" role="alert">
    {{Session::get('message')}}
</div>
@endif

<div class="my-3 col-12 col-sm-8 col-md-5">
    <form action="" method="GET">
    <div class="input-group mb-3">
        <!-- name="Keyword" harus sesuai dengan controller -->
        <input type="text" class="form-control" name="Keyword" placeholder="Keyword">
        <button class="input-group-text btn btn-secondary text-light"><b>Search</b></button>
    </div>
    </form>
</div>

<div class="my-5">
    {{$studentList->withQueryString()->links()}}
</div>
<table class="table" tag="center">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Gender</th>
            <th>NIS</th>
            <th>Class</th>
            <th>Action</th>
            <!-- <th>Kelas</th>
            <th>Extrakulikuler</th>
            <th>Homeroom Teacher</th> -->
        </tr>
    </thead>
    <tbody>
     @foreach($studentList as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->gender}}</td>
            <td>{{$data->nis}}</td>
            <td>{{$data->class->name}}</td>
            <!-- <td>{{$data->class['name']}}</td>
            <td>
                @foreach ($data->extrakulikulers as $item)
                - {{$item->name}} <br>
                @endforeach
            </td>
            <td>{{$data->class->homeroomTeacher->name}}</td> -->
            <td>
                <a href="students/{{$data->id}}" class="btn btn-primary">Detail</a>
                <a href="student-edit/{{$data->id}}" class="btn btn-success">Edit</a>
                <a href="studelete/{{$data->id}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
     @endforeach
    </tbody>
</table>

@endsection