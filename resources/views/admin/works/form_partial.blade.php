@yield('image_insert')

<!-- hidden image field -->

{{ Form::hidden('image_name', old('image_name')  , array('id'=>'image') ) }}

<!-- image caption -->
<div class ="form-group">
    <fieldset class="form-group" id="title_fieldset">
        {!!  Form::label('caption', trans('admin.image_caption')) !!}
        <div class ="">
            {!!  Form::text('caption' , old('caption') , array('class'=>'form-control','id' => 'caption') ) !!}
        </div>
    </fieldset>
</div>


<!-- name -->
<div class ="form-group">
  <fieldset class="form-group" id="name_fieldset">
    {!!  Form::label('name', trans('admin.name'), array('class' => '')) !!}
    <div class ="">
      {!!  Form::text('name' ,old('name'), array('class'=>'form-control') ) !!}
    </div>
  </fieldset>
</div>



<div class="form-group">
    <fieldset  id="">
        {!!  Form::label('program', trans('admin.program'), array('class' => '')) !!}
        {!!  Form::select('program',  $programs  ,null, ['class' => 'form-control']) !!}
    </fieldset>
</div>

<div class ="form-group">
    <fieldset class="form-group" id="content_fieldset">
        {!!  Form::label('content', trans('admin.content'), array('class' => '')) !!}
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">{!! trans('admin.insert').' '.trans('admin.images') !!}</button>
        <div style="margin-top: 10px;">
            {!!  Form::textarea('content') !!}
        </div>
    </fieldset>
</div>


{{--<!-- email -->--}}
{{--<div class ="form-group">--}}
  {{--<fieldset class="form-group" id="email_fieldset">--}}
    {{--{!!  Form::label('email', trans('admin.email'), array('class' => '')) !!}--}}
    {{--<div class ="">--}}
      {{--{!!  Form::text('email' ,old('email'), array('class'=>'form-control') ) !!}--}}
    {{--</div>--}}
  {{--</fieldset>--}}
{{--</div>--}}



    <!-- status -->
<div class ="form-group" style="">
      <fieldset class="form-group">
        {!!  Form::label('status', trans('admin.status'), array('class' => '')) !!}
        <div>
          @include('admin.includes.status')

          </div>
        </fieldset>
</div>

    @include('admin.includes.buttons')

    {!! Form::close() !!}

    @include('admin.includes.uploadimagemodal')


    @push('scripts')
      @include('admin.jquery.ajax')
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.22/moment.min.js" ></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js" ></script>
      <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" >

      <script type="text/javascript">
      $(function () {
        $('#datetimepicker1').datetimepicker({
        });
      });
      </script>
    @endpush
