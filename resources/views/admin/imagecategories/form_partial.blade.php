








<!-- name -->
<div class ="form-group">
  <fieldset class="form-group" id="name_fieldset">
    {!!  Form::label('name', trans('admin.name'), array('class' => '')) !!}
    <div class ="">
      {!!  Form::text('name' ,old('name'), array('class'=>'form-control') ) !!}
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
