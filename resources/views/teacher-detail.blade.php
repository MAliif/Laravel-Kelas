@extends('layout.mainlayout')
@section('title', 'Teachers')
@section('content')

<h2>Anda melihat data dari Teacher yang bernama <b>{{$teacher2->name}}</b></h2>
<div class="mt-5 mb-5">
    <h3>Class : 
        @if ($teacher2->class) 
        {{$teacher2->class->name}}

        @else
        -

        @endif
    </h3>
</div>

<div class="mt-5">
    <h4>List Student</h4>
    @if ($teacher2->class)
    <ol>
        @foreach ($teacher2->class->studentsalif as $ule)
            <li>{{$ule->name}}</li>
        @endforeach
    </ol>

    @else
    -
    
    @endif
</div>

@endsection