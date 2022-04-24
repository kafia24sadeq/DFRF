

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




<!-- title -->
<div class ="form-group">
  <fieldset class="form-group" id="title_fieldset">
    {!!  Form::label('title', trans('admin.title'), array('class' => '')) !!}
    <div class ="">
      {!!  Form::text('title' ,old('title'), array('class'=>'form-control') ) !!}
    </div>
  </fieldset>
</div>



<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">{!! trans('admin.insert').' '.trans('admin.images') !!}</button>

<div class ="form-group">
  <fieldset class="form-group" id="content_fieldset">
    {!!  Form::label('content', trans('admin.content'), array('class' => '')) !!}
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
