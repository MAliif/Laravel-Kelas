@extends('layout.mainlayout')
@section('title', 'Teachers')
@section('content')

<h1>Teacher List</h1>

<div class="my-5">
    <a href="" class="btn btn-warning"><b>Add Data</b></a>
</div>

<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($teacherList as $data)
            <tr>
                <!-- Kalo mau loop iteration harus ada data dari tablenya, kalo gak ada gak bakal jalan -->
                <td>{{$loop->iteration}}</td>
                <td>{{$data->name}}</td>
                <td><a href="teachers-detail/{{$data->id}}">Detail</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection