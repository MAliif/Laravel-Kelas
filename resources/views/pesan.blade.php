@extends('layout.mainlayout')
@section('title', 'Pesan')
@section('content')

<h2>Anda melihat data Pesan </h2>
<div class="mt-5">
    <h4>List Pesan :</h4>
<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Judul</th>
            <th>Isi</th>
            <!-- <th>Anggota</th> -->
        </tr>
    </thead>
    <tbody>
    @foreach($pesankeren as $data)
            <tr>
                <!-- Kalo mau loop iteration harus ada data dari tablenya, kalo gak ada gak bakal jalan -->
                <td>{{$loop->iteration}}</td>
                <td>{{$data->judul}}</td>
                <td>{{$data->isi}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection