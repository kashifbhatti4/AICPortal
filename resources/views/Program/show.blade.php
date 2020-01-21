@extends('layouts.app')

@section('content')
<fieldset>
        <legend>Register for Program</legend>
        <div class="form-group row">
               {!! Form::label('name', 'Program Name:', ['class' => 'col-lg-10 control-label']) !!}
               <div class="col-lg-10 control-label">
                   @foreach ($collection[1][0] as $item)
                   <strong> {{$item->program_name}}</strong>
                  
        </div>
               <div class="form-group row">
               {!! Form::label('name', 'Age:', ['class' => 'col-lg-10 control-label']) !!}
               <div class="col-lg-10 control-label">
                    <strong>{{$item->age_lower}}-{{$item->age_upper}}</strong>
               </div>
            </div>
            <div class="form-group row">
               {!! Form::label('name', 'Date:', ['class' => 'col-lg-10 control-label']) !!}
               <div class="col-lg-10 control-label">
                    <strong>{{$item->start_date}}-{{$item->end_date}}</strong>
               </div>
            </div>
            <div class="form-group row">
               {!! Form::label('name', 'Fees:', ['class' => 'col-lg-10 control-label']) !!}
               <div class="col-lg-10 control-label">
                    <strong>${{$item->fees}}</strong>
               </div>
            </div>
            <div class="form-group row">
               {!! Form::label('name', 'Description:', ['class' => 'col-lg-10 control-label']) !!}
               <div class="col-lg-10 control-label">
                    <strong>{{$item->description}}</strong>
               </div>
           </div>
           <div class="form-group row">
                @endforeach
               </div>
           <fieldset>
                <legend>Members</legend>

                <div>
                        @foreach ($collection[0][0] as $item)
                        <li class="list-group-item">
                        <input type="checkbox" id="coding" name="interest" value="coding">
                        <label for="coding">{{$item->name}}</label>
                        </li>
                  @endforeach
                </div>
              </fieldset>
            </div> 
            <div class="form-group row">
                    {!! Form::submit('Add to Cart', ['class' => 'btn btn-lg btn-info pull left '] ) !!}
            </div>

@endsection
 
