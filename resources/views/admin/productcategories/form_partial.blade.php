








<!-- name -->
<div class ="form-group">
  <fieldset class="form-group" id="name_fieldset">
    {!!  Form::label('name', trans('admin.name'), array('class' => '')) !!}
    <div class ="">
      {!!  Form::text('name' ,old('name'), array('class'=>'form-control') ) !!}
    </div>
  </fieldset>
</div>





  <div class ="form-group">
    <fieldset class="form-group">
      {!!  Form::label('status', trans('admin.status'), array('class' => '')) !!}
      <div>
        {!!  Form::select('status',
          array(
            '0'=>  trans('admin.no')  ,
            '1'=>  trans('admin.yes') ,

          ),null, ['class' => 'form-control'] ) !!}
        </div>
      </fieldset>
    </div>

    @include('admin.includes.buttons')


    {!! Form::close() !!}



    @push('scripts')
      @include('admin.jquery.ajax')
    @endpush
