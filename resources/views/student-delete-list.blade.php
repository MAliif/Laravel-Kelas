@extends('layout.mainlayout')
@section('title', 'History Deleted Students')
@section('content')

<h1>History Deleted Students</h1>
<div class="my-5">
    <a href="/students" class="btn btn-primary"><b>Back</b></a>
</div>
<table class="table" tag="center">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Gender</th>
            <th>NIS</th>
            <th>Action</th>
            <!-- <th>Kelas</th>
            <th>Extrakulikuler</th>
            <th>Homeroom Teacher</th> -->
        </tr>
    </thead>
    <tbody>
     @foreach($wowhebat as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->gender}}</td>
            <td>{{$data->nis}}</td>
            <td>
                <a href="/stulon/{{$data->id}}/restore" class="btn btn-success">Restore</a>
            </td>
        </tr>
     @endforeach
    </tbody>
</table>

@endsection