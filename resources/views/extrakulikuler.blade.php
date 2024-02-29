@extends('layout.mainlayout')
@section('title', 'Extrakulikuler')
@section('content')

<h1>Extrakulikuler List</h1>

<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Action</th>
            <!-- <th>Anggota</th> -->
        </tr>
    </thead>
    <tbody>
        @foreach($eskulList as $data)
            <tr>
                <!-- Kalo mau loop iteration harus ada data dari tablenya, kalo gak ada gak bakal jalan -->
                <td>{{$loop->iteration}}</td>
                <td>{{$data->name}}</td>
                <!-- <td>
                    @foreach ($data->pelajars as $keren)
                    - {{$keren->name}} <br>
                    @endforeach
                </td> -->
                <td><a href="eskul-detail/{{$data->id}}">Detail</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection