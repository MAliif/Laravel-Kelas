@extends('layout.mainlayout')
@section('title', 'Classroom')
@section('content')

<h1>Class List</h1>

<div class="my-5">
    <a href="" class="btn btn-warning"><b>Add Data</b></a>
</div>

<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Action</th>
            <!-- <th>Student</th>
            <th>HomeRoom Teacher</th> -->
        </tr>
    </thead>
    <tbody>
        @foreach($classList as $data)
            <tr>
                <!-- Kalo mau loop iteration harus ada data dari tablenya, kalo gak ada gak bakal jalan -->
                <td>{{$loop->iteration}}</td>
                <td>{{$data->name}}</td>
                <!-- <td>
                    @foreach ($data->studentsalif as $keren)
                    - {{$keren->name}} <br>
                    @endforeach
                </td>
                <td>{{$data->homeroomTeacher->name}}</td> -->
                <td><a href="class-detail/{{$data->id}}">Detail</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection