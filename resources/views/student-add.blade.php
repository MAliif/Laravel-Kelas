@extends('layout.mainlayout')
@section('title', 'Students Create')
@section('content')


<div class="mt-5 col-8 m-auto">
<h1>Tambah Data</h1><br>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $errorkeren)
            <li>{{ $errorkeren }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <form action="studont" method="post">
        @csrf
        <div class="mb-3">
            <label for="name"><b>Name</b></label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="gender"><b>Gender</b></label>
            <select name="gender" id="gender" class="form-control" required>
                <option value=""> </option>
                <option value="L">L</option>
                <option value="P">P</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="nis"><b>NIS</b></label>
            <input type="text" class="form-control" id="nis" name="nis" required>
        </div>

        <div class="mb-3">
            <label for="class"><b>Class</b></label>
            <select name="class_id" id="class" class="form-control" required>
                <option value=""> </option>
                @foreach ($class as $hi)
                    <option value="{{$hi->id}}"> {{$hi->name}} </option>
                @endforeach
            </select>
        </div>


        <div class="mb-3">
            <button class="btn btn-success" type="submit">Save</button>
        </div>
    </form>
</div>

@endsection