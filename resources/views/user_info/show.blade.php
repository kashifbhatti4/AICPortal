@extends('layouts.app')

@section('content')
<a href="/user_info" class="btn btn-default">Go Back</a>
<h1>{{$User_info->name}}</h1>
<hr>

<div>
    <h3>Email: {{$User_info->email}}</h3>
    <h3>Email (Second): {{$User_info->secondary_email}}</h3>
    <h3>Date of Birth: {{$User_info->dob}}</h3>
    <h3>Allergies: {{$User_info->allergies}}</h3>
    <h3>Emergency Contact Info: {{$User_info->emer_name}} | {{$User_info->emer_phone}} | {{$User_info->emer_relation}}</h3>
</div>
@endsection