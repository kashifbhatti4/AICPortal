@extends('layouts.app')

@section('content')
    {!! Form::open(['action' => 'ClassesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
         <!-- Email -->
         <fieldset>
             <legend>Add Class</legend>
             <div class="form-group row">
                    {!! Form::label('name', 'Name:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                    </div>
                </div>
                <!-- Can automate program_id input -->
                <div class="form-group row">
                        {!! Form::label('program_id', 'Program ID:', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::text('program_id', $value = null, ['class' => 'form-control', 'placeholder' => 'Program ID']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                            {!! Form::label('schedule', 'Schedule Info:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {!! Form::text('schedule', $value = null, ['class' => 'form-control', 'placeholder' => 'Schedule Info']) !!}
                            </div>
                        </div>
            <div class="form-group row">
                    {!! Form::label('fees', 'Fees:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('fees', $value = null, ['class' => 'form-control', 'placeholder' => '$']) !!}
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