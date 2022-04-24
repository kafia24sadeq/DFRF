








<!-- title -->
<div class ="form-group">
  <fieldset class="form-group" id="title_fieldset">
    {!!  Form::label('title', trans('admin.title'), array('class' => '')) !!}
    <div class ="">
      {!!  Form::text('title' ,old('title'), array('class'=>'form-control') ) !!}
    </div>
  </fieldset>
</div>

<!-- desc -->
<div class ="form-group">
  <fieldset class="form-group" id="desc_fieldset">
    {!!  Form::label('desc', trans('admin.desc'), array('class' => '')) !!}
    <div class ="">
      {!!  Form::text('desc' ,old('desc'), array('class'=>'form-control') ) !!}
    </div>
  </fieldset>
</div>


{{-- <!-- 	state -->
<div class ="form-group">
  <fieldset class="form-group" id="state_fieldset">
    {!!  Form::label('state', trans('admin.state'), array('class' => '')) !!}
    <div>
      {!!  Form::select('state',
        array(
          '0'=>0,
          '1'=>1,
        ),null, ['class' => 'form-control'] ) !!}
      </div>
    </fieldset>
  </div> --}}


  <!-- 	priority -->
  <div class ="form-group">
    <fieldset class="form-group" id="priority_fieldset">
      {!!  Form::label('priority', trans('admin.priority'), array('class' => '')) !!}
      <div>
        {!!  Form::select('priority',
        [
            '0'=>  Priority(0, true)  ,
            '1'=>  Priority(1, true)  ,
          ],null, ['class' => 'form-control'] ) !!}
        </div>
      </fieldset>
    </div>



    <!-- date -->
    <div class ="form-group" >
      <fieldset class="form-group" id="date_fieldset">
        <div id="datetimepicker1" class='input-group date form-control' >


          {!!  Form::label('date', trans('admin.date'), array('class' => '')) !!}
          <div>
            {!!  Form::text('date' , old('created_at'), array('class'=>'form-control','id'=>'')) !!}
            <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
            </span>
          </div>
        </div>
      </fieldset>
    </div>


    <!-- user select -->
    <div class ="form-group">

      <fieldset class="form-group" id="">
        {!!  Form::label('user', trans('admin.assignedto'), array('class' => '')) !!}

        <div class ="">
          {!!  Form::select('user',  $users  ,null, ['class' => 'form-control']) !!}
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
