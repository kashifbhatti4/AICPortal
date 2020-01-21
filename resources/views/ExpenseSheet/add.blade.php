@extends('layouts.app')

@section('content')
    {!! Form::open(['action' => 'ExpenseSheetController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
         <!-- Email -->
         <fieldset>
             <legend>Add Member</legend>
            <div class="form-group row">
                    {!! Form::label('item', 'Item:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('item', $value = null, ['class' => 'form-control', 'placeholder' => 'Item']) !!}
                    </div>
                </div>
            <div class="form-group row">
                {!! Form::label('program_id', 'Program ID:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::text('program_id', $value = null, ['class' => 'form-control', 'placeholder' => 'Program ID']) !!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('description', 'Description:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::text('description', $value = null, ['class' => 'form-control', 'placeholder' => 'Description']) !!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('merchant', 'Merchant:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::text('merchant', $value = null, ['class' => 'form-control', 'placeholder' => 'Merchant']) !!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('expense', 'Expense:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::text('expense', $value = null, ['class' => 'form-control', 'placeholder' => 'Expense']) !!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('payment_type', 'Payment Type:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::text('payment_type', $value = null, ['class' => 'form-control', 'placeholder' => 'Payment Type']) !!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('status', 'Paid Status:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::text('status', $value = null, ['class' => 'form-control', 'placeholder' => 'Status']) !!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('dates', 'Date:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::date('dates')!!}
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