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
    {!!  Form::label('title', trans('admin.name'), array('class' => '')) !!}
    <div class ="">
      {!!  Form::text('name' ,old('name'), array('class'=>'form-control') ) !!}
    </div>
  </fieldset>
</div>






<div class ="form-group">
  <fieldset class="form-group" id="content_fieldset">
    {!!  Form::label('description', trans('admin.description'), array('class' => '')) !!}
    <div>
      {!!  Form::textarea('content' ) !!}
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

@include('admin.includes.uploadimagemodal')


@push('scripts')
@include('admin.jquery.ajax')
@endpush
