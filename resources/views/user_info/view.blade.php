@extends('layouts.app')

@section('content')
    <h1>Users</h1>
    @if (count($User_info)>0)
        @foreach ($User_info as $user)
            <div class="well">
            <h3><a href="/user_info/{{$user->users_id}}">{{$user->name}}</a></h3>
            </div>
        @endforeach
    @else
    @endif
@endsection