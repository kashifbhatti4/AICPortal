@extends('layouts.app')

@section('content')
    {!! Form::open(['action' => 'ProgramController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
         <!-- Email -->
         <fieldset>
             <legend>Add Program</legend>
             <div class="form-group row">
                    {!! Form::label('name', 'Name:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                    </div>
                </div>
            <div class="form-group row">
                    {!! Form::label('age_lower', 'Lower Age Limit:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('age_lower', $value = null, ['class' => 'form-control', 'placeholder' => 'Lower Age Limit']) !!}
                    </div>
                </div>
                <div class="form-group row">
                    {!! Form::label('age_upper', 'Upper Age Limit:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('age_upper', $value = null, ['class' => 'form-control', 'placeholder' => 'Upper Age Limit']) !!}
                    </div>
                </div>
            <div class="form-group row">
                {!! Form::label('start_date', 'Start Date:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::date('start_date')!!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('end_date', 'End Date:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::date('end_date')!!}
                </div>
            </div>
                <div class="form-group row">
                        {!! Form::label('fees', 'Fees:', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::text('fees', $value = null, ['class' => 'form-control', 'placeholder' => '$']) !!}
                        </div>
                    </div>
            <!-- Radio Buttons -->
            <div class="form-group row">
            </div>
                        <!-- Text Area -->
            <div class="form-group row">
                {!! Form::label('description', 'Description', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::textarea('description', $value = null, ['class' => 'form-control', 'rows' => 3, 'placeholder' => 'Description']) !!}
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