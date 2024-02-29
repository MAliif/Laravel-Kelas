@extends('layout.mainlayout')
@section('title', 'Home')
@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 9 | Home</title>
</head>
    <!-- Isinya -->
    <div class="container">
    <h1>Welcome</h1>
    <h2>{{$name}},
    Sebagai {{$role}}</h2>
    <br><br>
    <h3>Lihat Halaman <a href="/pesan"><button type="button" class="btn btn-dark">Pesan</button></a>

    <!-- <table class="table">
        <tr>
            <th>No.</th>
            <th>Nama</th>
        </tr>
        @foreach($tugas as $data)
        <tr>
            <td>{{$loop -> iteration}}</td>
            <td>{{$data}}</td>
        </tr>
        @endforeach
    </table>

    <br><br>
    <button class="btn btn-primary">Klik!</button> -->
    </div>

</body>
</html>
@endsection