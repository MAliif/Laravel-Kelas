@extends('layout.mainlayout')
@section('title', 'Students Edit')
@section('content')

<div class="mt-5 col-8 m-auto">
<h1>Edit Data</h1><br>
    <form action="/stupdate/{{$wow->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name"><b>Name</b></label>
            <input type="text" class="form-control" id="name" name="name" value="{{$wow->name}}" required>
        </div>

        <div class="mb-3">
            <label for="gender"><b>Gender</b></label>
            <select name="gender" id="gender" class="form-control" required>
                <option value="{{$wow->gender}}">{{$wow->gender}}</option>
                @if ($wow->gender == 'L')
                    <option value="P">P</option>
                @else
                    <option value="L">L</option>
                @endif
            </select>
        </div>

        <div class="mb-3">
            <label for="nis"><b>NIS</b></label>
            <input type="text" class="form-control" id="nis" name="nis" value="{{$wow->nis}}" required>
        </div>

        <div class="mb-3">
            <label for="class"><b>Class</b></label>
            <select name="class_id" id="class" class="form-control" required>
                <option value="{{$wow->class->id}}">{{$wow->class->name}}</option>
                @foreach ($via as $reu)
                    <option value="{{$reu->id}}">{{$reu->name}}</option>
                @endforeach
            </select>
        </div>


        <div class="mb-3">
            <button class="btn btn-success" type="submit">Update</button>
        </div>
    </form>
</div>

@endsection