@extends('layouts.app')

@section('content')
    {!! Form::open(['action' => 'User_InfoController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
         <!-- Email -->
         <fieldset>
             <legend>Add Member</legend>
             <div class="form-group row">
                    {!! Form::label('name', 'Name:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                    </div>
                </div>
            <div class="form-group row">
                {!! Form::label('email', 'Email:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                </div>
            </div>
            <div class="form-group row">
                    {!! Form::label('secondaryemail', 'Secondary Email:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::email('secondaryemail', $value = null, ['class' => 'form-control', 'placeholder' => 'Secondary Email']) !!}
                    </div>
                </div>
            <div class="form-group row">
                {!! Form::label('dateofbirth', 'Date Of Birth:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::date('dateofbirth')!!}
                </div>
            </div>
            {{-- <!-- Password -->
            <div class="form-group row">
                {!! Form::label('password', 'Password:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::password('password',['class' => 'form-control', 'placeholder' => 'Password', 'type' => 'password']) !!}
                    <div class="checkbox">
                        {!! Form::label('checkbox', 'Checkbox') !!}
                        {!! Form::checkbox('checkbox') !!}
                    </div>
                </div>
            </div> --}}
            {{-- <div class="form-group row">
                    {!! Form::label('gender', 'Gender', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        <div class="radio">
                            {!! Form::label('male', 'Male') !!}
                            {!! Form::radio('radio', 'Male', true, ['id' => 'Male']) !!}
         
                        </div>
                        <div class="radio">
                            {!! Form::label('female', 'Female') !!}
                            {!! Form::radio('radio', 'Female', false, ['id' => 'Female']) !!}
                        </div>
                    </div>
                </div> --}}
                <div class="form-group row">
                        {!! Form::label('gender', 'Gender:', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                        
                        <select name="gender" id="gender" class="form-control">
                            <option value="male"> {!! Form::label('male', 'Male') !!}</option>
                            <option value="female">{!! Form::label('female', 'Female') !!}</option>
                        </select>
                    </div>
                    </div>
                <div class="form-group row">
                        {!! Form::label('primaryNo', 'Primary Number:', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::text('primaryNo', $value = null, ['class' => 'form-control', 'placeholder' => '+1-9876543210']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                            {!! Form::label('secondaryNo', 'Secondary Number:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {!! Form::text('secondaryNo', $value = null, ['class' => 'form-control', 'placeholder' => 'Optional']) !!}
                            </div>
                        </div>
            <!-- Radio Buttons -->
            <div class="form-group row">
                    {!! Form::label('isParent', 'Are you a Parent?', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        <div class="radio">
                            {!! Form::label('yes', 'Yes') !!}
                            {!! Form::radio('radio2', 'Yes', true, ['id' => 'yes']) !!}
         
                        </div>
                        <div class="radio">
                            {!! Form::label('no', 'No') !!}
                            {!! Form::radio('radio2', 'No', false, ['id' => 'no']) !!}
                        </div>
                    </div>
            </div>
                        <!-- Text Area -->
            <div class="form-group row">
                {!! Form::label('allergies', 'Allergies', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::textarea('allergies', $value = null, ['class' => 'form-control', 'rows' => 3]) !!}
                </div>
            </div>
     
            <!-- Radio Buttons -->
            <div class="form-group row">
                {!! Form::label('isPhoto', 'Photo Upload Allowed', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    <div class="radio">
                        {!! Form::label('yes', 'Yes') !!}
                        {!! Form::radio('radio1', 'Yes', true, ['id' => 'yes']) !!}
     
                    </div>
                    <div class="radio">
                        {!! Form::label('no', 'No') !!}
                        {!! Form::radio('radio1', 'No', false, ['id' => 'no']) !!}
                    </div>
                </div>
            </div>
            <legend>Emergency Contact</legend>
            <div class="form-group row">
                    {!! Form::label('emergname', 'Name:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('emergname', $value = null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                    </div>
                </div>
                <div class="form-group row">
                        {!! Form::label('emergno', 'Phone Number:', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::text('emergno', $value = null, ['class' => 'form-control', 'placeholder' => '+1-9876543210']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                            {!! Form::label('emergrel', 'Relation:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {!! Form::text('emergrel', $value = null, ['class' => 'form-control']) !!}
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