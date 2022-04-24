








<!-- name -->
<div class ="form-group">
  <fieldset class="form-group" id="name_fieldset">
    {!!  Form::label('name', trans('admin.name'), array('class' => '')) !!}
    <div class ="">
      {!!  Form::text('name' ,old('name'), array('class'=>'form-control') ) !!}
    </div>
  </fieldset>
</div>


<!-- display_name -->
<div class ="form-group">
  <fieldset class="form-group" id="display_name_fieldset">
    {!!  Form::label('display_name', trans('admin.display_name'), array('class' => '')) !!}
    <div class ="">
      {!!  Form::text('display_name' ,old('display_name'), array('class'=>'form-control') ) !!}
    </div>
  </fieldset>
</div>



<!-- description -->
<div class ="form-group">
  <fieldset class="form-group" id="content_fieldset">
    {!!  Form::label('description', trans('admin.description'), array('class' => '')) !!}
    <div>
      {!!  Form::textarea('description' ,old('description') , array('class'=>'form-control')) !!}
    </div>
  </fieldset>
</div>




@include('admin.includes.buttons')


{!! Form::close() !!}



@push('scripts')
  @include('admin.jquery.ajax')

@endpush
