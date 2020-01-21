@extends('layouts.app')

@section('content')
<h1>Users</h1>
<legend>Approved Contacts</legend>
@if (count($Contact)>0)
    @foreach ($Contact as $contact)
        <div class="well">
        <h3><a>Name: </a><a href="#" >{{$contact->name}}</a><a> | Phone Number: </a><a href="#" >{{$contact->phone_number}}</a>
        </div>
    @endforeach
@else
@endif
@endsection