@extends('layout.mainlayout')
@section('title', 'Students')
@section('content')

<h2>Anda melihat data Extrakulikuler dari <b>{{$eskulkeren->name}}</b></h2>
<div class="mt-5">
    <h4>List Siswa :</h4>
    <ol>
        @foreach ($eskulkeren->pelajars as $item)
            <li> {{$item->name}} </li>
        @endforeach
    </ol>
</div>
@endsection