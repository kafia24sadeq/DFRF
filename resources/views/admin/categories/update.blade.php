@extends('layouts.app')

@section('content')


  <div class ="container col-md-6 col-md-offset-3">
    <div class ="well well bs-component">

      @foreach ($errors->all() as $error)
        <p class ="alert alert-danger">{{ $error }}</p>
      @endforeach

      {!! Form::open(['action' => ['CategoryController@update', $category->id]]) !!}

      <!-- name -->
      <div class ="form-group">
        <fieldset class="form-group">
          {!!  Form::label('name', 'name', array('class' => 'col-lg-2 control-label')) !!}
          <div class ="col-lg-10">
            {!!  Form::text('name' , $category->name , array('class'=>'form-control') ) !!}
          </div>
        </fieldset>
      </div>






        <!-- menushow -->
        <div class ="form-group">
          <fieldset class="form-group">
            {!!  Form::label('menushow', 'menushow', array('class' => 'col-lg-2 control-label')) !!}
            <div class ="col-lg-10">
              {!!  Form::select('menushow',
                array(
                  '0'=>'no',
                  '1'=>'yes',

                ) , $category->menushow  ,  array('class'=>'form-control')) !!}
              </div>
            </fieldset>
          </div>

          <!-- homeshow -->
        <div class ="form-group">
          <fieldset class="form-group">
            {!!  Form::label('homeshow', 'homeshow', array('class' => 'col-lg-2 control-label')) !!}
            <div class ="col-lg-10">
              {!!  Form::select('homeshow',
                array(
                  '0'=>'no',
                  '1'=>'yes',

                ),$category->homeshow ,  array('class'=>'form-control') ) !!}
              </div>
            </fieldset>
          </div>


          <!-- status -->
        <div class ="form-group">
          <fieldset class="form-group">
            {!!  Form::label('status', 'status', array('class' => 'col-lg-2 control-label')) !!}
            <div class ="col-lg-10">
              {!!  Form::select('status',
                array(
                  '0'=>'no',
                  '1'=>'yes',

                ),$category->status ,  array('class'=>'form-control') ) !!}
              </div>
            </fieldset>
          </div>

          <div class="">
            {!!  Form::submit('Click Me!') !!}
          </div>

          {!! Form::close() !!}
        </div>
      </div>




    @endsection
