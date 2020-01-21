@extends('layouts.app')

@section('content')
    <h1>Programs</h1>
    @if (count($Program)>0)
        @foreach ($Program as $program)
            <div class="well">
            <h3><a href="/program/{{$program->program_id}}">{{$program->program_name}}</a></h3>
            </div>
        @endforeach
    @else
    @endif
@endsection