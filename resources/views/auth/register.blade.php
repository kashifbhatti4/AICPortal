@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
                    {{-- <div class="form-group row">
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
                    </div> --}}
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
                                <legend>Address</legend>
                                <div class="form-group row">
                                        {!! Form::label('address', 'Address:', ['class' => 'col-lg-2 control-label']) !!}
                                        <div class="col-lg-10">
                                            {!! Form::text('address', $value = null, ['class' => 'form-control', 'placeholder' => 'Address']) !!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            {!! Form::label('city', 'City:', ['class' => 'col-lg-2 control-label']) !!}
                                            <div class="col-lg-10">
                                                {!! Form::text('city', $value = null, ['class' => 'form-control', 'placeholder' => 'city']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                                {!! Form::label('home_state', 'State', ['class' => 'col-lg-2 control-label']) !!}
                                                <div class="col-lg-10">
                                                    {!! Form::text('home_state', $value = null, ['class' => 'form-control', 'placeholder' => 'State']) !!}
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                            {!! Form::label('zip_code', 'Zip Code', ['class' => 'col-lg-2 control-label']) !!}
                                            <div class="col-lg-10">
                                                {!! Form::text('zip_code', $value = null, ['class' => 'form-control', 'placeholder' => 'Zip code']) !!}
                                            </div>
                                        </div>
             
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
