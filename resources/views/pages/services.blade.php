@extends('layouts.app')

@section('content')
{{-- <h1> {{$title}} </h1>
@if(count($services)>0)
    <ul class="list-group">
        @foreach ($services as $service)
            <li class="list-group-item">{{$service}}</li>
        @endforeach
    </ul>
@endif --}}
<fieldset>
        <legend>Register for Program</legend>
        <div class="form-group row">
               {!! Form::label('name', 'Program Name:', ['class' => 'col-lg-2 control-label']) !!}
               {!! Form::label('name', 'Sunday School', ['class' => 'col-lg-2 control-label']) !!}
        </div>
               <div class="form-group row">
               {!! Form::label('name', 'Age:', ['class' => 'col-lg-2 control-label']) !!}
               {!! Form::label('name', '5-15', ['class' => 'col-lg-2 control-label']) !!}
            </div>
            <div class="form-group row">
               {!! Form::label('name', 'Date:', ['class' => 'col-lg-2 control-label']) !!}
               {!! Form::label('name', '9/2/2019-6/10/2019', ['class' => 'col-lg-2 control-label']) !!}
            </div>
            <div class="form-group row">
               {!! Form::label('name', 'Fees:', ['class' => 'col-lg-2 control-label']) !!}
               {!! Form::label('name', '$370', ['class' => 'col-lg-2 control-label']) !!}
            </div>
            <div class="form-group row">
               {!! Form::label('name', 'Description:', ['class' => 'col-lg-2 control-label']) !!}
               {!! Form::label('name', 'Weekend school runs from 10.30 to 1.30 pm every sunday.Deadline to register for lower prics is until september 1,2019 after that it will be $440 per year', ['class' => 'col-lg-10 control-label']) !!}
           </div>
           <div class="form-group row">
           <fieldset>
                <legend>Members</legend>
                <div>
                        @foreach ($services as $service)
                        <li class="list-group-item">
                        <input type="checkbox" id="coding" name="interest" value="coding">
                        <label for="coding">{{$service}}</label>
                        </li>
                  @endforeach
                </div>
              </fieldset>
            </div> 
            <div class="form-group row">
                    {!! Form::submit('Add to Cart', ['class' => 'btn btn-lg btn-info pull left '] ) !!}
            </div>

@endsection
 
