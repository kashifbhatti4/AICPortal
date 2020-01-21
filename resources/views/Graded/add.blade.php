@extends('layouts.app')

@section('content')
    {!! Form::open(['action' => 'GradedController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
         <!-- Email -->
         <fieldset>
             <legend>Grade Assignments</legend>
             <div class="form-group row">
                    {!! Form::label('users_id', 'User ID:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('users_id', $value = null, ['class' => 'form-control', 'placeholder' => 'User ID']) !!}
                    </div>
                </div>
            

            <div class="form-group row">
                    {!! Form::label('assignment_id', 'Assignment No:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('assignment_id', $value = null, ['class' => 'form-control', 'placeholder' => 'Assignment number']) !!}
                    </div>
                </div>
                <div class="form-group row">
                        {!! Form::label('grade', 'Grade:', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::text('grade', $value = null, ['class' => 'form-control', 'placeholder' => 'Grade']) !!}
                        </div>
                    </div>
                    
     
            <!-- Submit Button -->
            <div class="form-group row">
                <div class="col-lg-10 col-lg-offset-2">
                    {!! Form::submit('Add', ['class' => 'btn btn-lg btn-info pull centre '] ) !!}
                    {!! Form::Reset('Reset', ['class' => 'btn btn-lg btn-info pull centre '] ) !!}
                    </div>
            </div>
     
        </fieldset>
    {!! Form::close() !!}
@endsection