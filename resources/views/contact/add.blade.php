@extends('layouts.app')

@section('content')
    {!! Form::open(['action' => 'ContactController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
         <!-- Email -->
         <fieldset>
             <legend>Add Contact</legend>
             <div class="form-group row">
                    {!! Form::label('name', 'Name:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                    </div>
                </div>
            <div class="form-group row">
                {!! Form::label('phonenumber', 'Phone Number:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::text('phonenumber', $value = null, ['class' => 'form-control', 'placeholder' => '+1-1234567890']) !!}
                </div>
            </div>
     
            <!-- Submit Button -->
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info pull-centre'] ) !!}
                </div>
            </div>
     
        </fieldset>
    {!! Form::close() !!}
@endsection