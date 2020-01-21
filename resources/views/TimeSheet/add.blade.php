@extends('layouts.app')

@section('content')
    {!! Form::open(['action' => 'TimeSheetController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
         <!-- Email -->
         <fieldset>
             <legend>Time Sheet Entry</legend>
             <!-- put a constraint on this field that cannot add new user_id --> 
             {{-- <div class="form-group row">
                    {!! Form::label('users_id', 'User ID:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('users_id', $value = null, ['class' => 'form-control', 'placeholder' => 'User ID']) !!}
                    </div>
                </div> --}}
            <div class="form-group row">
                {!! Form::label('dates', 'Date:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::date('dates')!!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('hourly_rate', 'Hourly Rate:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::text('hourly_rate', $value = null, ['class' => 'form-control', 'placeholder' => 'Hourly Rate']) !!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('total_hours', 'Total Hours:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::text('total_hours', $value = null, ['class' => 'form-control', 'placeholder' => 'Total Hours']) !!}
                </div>
            </div>
            {{-- <div class="form-group row">
                {!! Form::label('paid_on', 'Paid On:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::date('paid_on')!!}
                </div>
            </div> --}}
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