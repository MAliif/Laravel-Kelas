@extends('layout.mainlayout')
@section('title', 'Students Delete')
@section('content')

<div class="mt-5">
    <h2>Apakah kamu yakin menghapus data<br></h2>
    <h3 class="text-primary">Nama : </h3><h4>{{$wowhebat->name}}</h4>
    <h3 class="text-primary">NIS  : </h3><h4>{{$wowhebat->nis}}</h4><br>

    <form style="display: inline-block" action="/studestroy/{{$wowhebat->id}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="/students" class="btn btn-secondary">Cancel</a>
</div>

@endsection