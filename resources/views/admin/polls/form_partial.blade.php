

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
    {!!  Form::label('question', trans('admin.question'), array('class' => '')) !!}
    <div class ="">
      {!!  Form::text('question' ,old('question'), array('class'=>'form-control') ) !!}
    </div>
  </fieldset>
</div>


@if ( starts_with(Route::currentRouteName() , 'admin.polls.edit') == false )

@for($i = 0 ; $i <= 10 ; $i++)
<!-- title -->
<div class ="form-group">
  <fieldset class="form-group" id="title_fieldset">
    {!!  Form::label('option'.$i, trans('admin.option'.$i), array('class' => '')) !!}
    <div class ="">
      {!!  Form::text('option'.$i ,isset($options[$i]['name']) ? $options[$i]['name'] : "", array('class'=>'form-control') ) !!}
    </div>
  </fieldset>
</div>

@endfor
@endif






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
