@extends('layouts.app')

@section('content')
    <h1>Users</h1>
    <h2>My Classes</h2>
    <hr>
    @if (count($Classes)>0)
        @foreach ($Classes as $classes)
            <div class="well">
            <h3><a>Class Name: </a><a href="/graded/{{$classes->classes_id}}" >{{$classes->name}}</a> 
            <br>
            <a>Schedule: {{$classes->schedule}}</a>
            </div>
        @endforeach
    @else
    @endif

@endsection