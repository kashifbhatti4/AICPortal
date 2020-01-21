@extends('layouts.app')

@section('content')
    {!! Form::open(['action' => 'AssignmentController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
         <!-- Email -->
         <fieldset>
             <legend>Add Assignment</legend>
             <div class="form-group row">
                    {!! Form::label('c', 'Assignment Name:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('assignment_name', $value = null, ['class' => 'form-control', 'placeholder' => 'Assignment Name']) !!}
                    </div>
                </div>
            <!-- Can automatically fetch class_id -->
            <div class="form-group row">
                    {!! Form::label('classes_id', 'Class ID:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('classes_id', $value = null, ['class' => 'form-control', 'placeholder' => 'Class ID']) !!}
                    </div>
                </div>
            <div class="form-group row">
                {!! Form::label('total_points', 'Total Points:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::text('total_points', $value = null, ['class' => 'form-control', 'placeholder' => '100']) !!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('due_date', 'Due Date:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::date('due_date')!!}
                </div>
            </div>
            <!-- Text Area -->
            <div class="form-group row">
                {!! Form::label('description', 'Description:', ['class' => 'col-lg-2 control-label']) !!}
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