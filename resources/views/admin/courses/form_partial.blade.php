<style media="screen">
  * {
    margin: 0;
    padding: 0;
  }
</style>

<style media="screen">
  .btn-file {
    position: relative;
    overflow: hidden;
    margin: 10px 0;
  }
  .btn-file input {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
  }
</style>

@yield('image_insert')

<!-- hidden image field -->

{{ Form::hidden('image_name', old('image_name')  , array('id'=>'image') ) }}



<div class ="form-group">
  <fieldset class="form-group" id="title_fieldset">
    {!!  Form::label('name', trans('admin.name'), array('class' => '')) !!}
    <div class ="">
      {!!  Form::text('name' ,old('name'), array('class'=>'form-control') ) !!}
    </div>
  </fieldset>
</div>


<div class ="form-group">
    <fieldset class="form-group" id="description_fieldset">
        {!!  Form::label('description', trans('admin.courseDescription'), array('class' => '')) !!}
        <div>
            {!!  Form::textarea('description' ) !!}
        </div>
    </fieldset>
</div>

<div class ="form-group">
    <fieldset class="form-group" id="content_fieldset">
        {!!  Form::label('course_content', trans('admin.courseContent'), array('class' => '')) !!}
        <div>
            {!!  Form::textarea('course_content' ) !!}
        </div>
    </fieldset>
</div>

<div class ="form-group">
  <fieldset class="form-group" id="title_fieldset">
    {!!  Form::label('course_time', trans('admin.courseTime'), array('class' => '')) !!}
    <div class ="">
      {!!  Form::text('course_time' ,old('course_time'), array('class'=>'form-control') ) !!}
    </div>
  </fieldset>
</div>


<div class ="form-group" >
    <fieldset class="form-group" id="date_fieldset">
        {!!  Form::label('starting_date', trans('admin.startingDate'), array('class' => '')) !!}

        <div id="datetimepicker1" class='input-group date form-control' >
            {!!  Form::text('starting_date', old('starting_date'), array('class'=>'form-control', 'id'=>"datetimepicker") ) !!} <span class="glyphicon glyphicon-calendar"></span>
        </div>
    </fieldset>
</div>



<div class ="form-group">
    <fieldset class="form-group" id="title_fieldset">
        {!!  Form::label('trainer_name', trans('admin.trainerName'), array('class' => '')) !!}
        <div class ="">
            {!!  Form::text('trainer_name' ,old('trainer_name'), array('class'=>'form-control') ) !!}
        </div>
    </fieldset>
</div>

<div class ="form-group">
    <fieldset class="form-group" id="title_fieldset">
        {!!  Form::label('hours_no', trans('admin.courseHours'), array('class' => '')) !!}
        <div class ="">
            {!!  Form::text('hours_no' ,old('hours_no'), array('class'=>'form-control') ) !!}
        </div>
    </fieldset>
</div>

<div class ="form-group">
    <fieldset class="form-group">
        {!!  Form::label('availability', trans('admin.availability'), array('class' => '')) !!}
        <div>
            {!!  Form::select('availability',
   array(
     '1'=>  trans('admin.open')  ,
     '2'=>  trans('admin.closed') ,
     '3'=>  trans('admin.inPrep') ,

   ),null, ['class' => 'form-control'] ) !!}

        </div>
    </fieldset>
</div>


<!-- status -->
<div class ="form-group">
  <fieldset class="form-group">
    {!!  Form::label('status', trans('admin.status'), array('class' => '')) !!}
    <div>
      @include('admin.includes.status')

    </div>
  </fieldset>
</div>


@include('admin.includes.buttons')


{!! Form::close() !!}

{{--@include('admin.includes.uploadimagemodal')--}}


{{--@push('scripts')--}}
{{--@include('admin.jquery.ajax')--}}
{{--@endpush--}}

@push('scripts')
    @include('admin.jquery.ajax')
    <script src="/cp/js/datetimepicker-master/build/jquery.datetimepicker.full.js"></script>
    <link rel="stylesheet" type="text/css" href="/cp/js/datetimepicker-master/jquery.datetimepicker.css"/>



    <script type="text/javascript">
        $.datetimepicker.setLocale('ar');

        $(function () {
            $('#datetimepicker').datetimepicker({
            });
        });
    </script>
@endpush
