








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


<!-- permissions -->
<div class ="form-group">
  <fieldset class="form-group" id="permissions_fieldset">
    {!!  Form::label('permissions', trans('admin.permissions'), array('class' => '')) !!}
    <div>
      <table class ="table table-striped table-bordered table-hover table-sm">
        <thead>
          <tr>
            <th>{!!  trans('admin.ID')  !!}</th>
            <th>{!!  trans('admin.name')  !!}</th>
            <th>{!!  trans('admin.display_name')  !!}</th>
            <th>{!!  trans('admin.desc')  !!}</th>
            <th>{!!  trans('admin.select')  !!}</th>


          </tr>
        </thead>
        <tbody>
      @foreach ($permissions as $element)
        <tr>
          <td>{!! $element->id !!}</td>
          <td>{!! $element->name !!}</td>
          <td>{!! trans('admin'.strstr($element->display_name, '.')).' '.trans('admin.'.strstr($element->display_name, '.', true)) !!}</td>
          <td>{!! $element->desc !!}</td>
          <td style="text-align:center">
            {!! Form::checkbox('permissions[]' , $element->id ,(in_array($element->id, $selectedPermissions)? true : false), array('class'=>'checkbox' ,'data-size'=>'mini')) !!}
          </td>


          </tr>

      @endforeach
    </tbody>
  </table>

    </div>
  </fieldset>
</div>




@include('admin.includes.buttons')


{!! Form::close() !!}



@push('scripts')
  @include('admin.jquery.ajax')

    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    <script>
    $(function() {
      $('.checkbox').bootstrapToggle({
        on: '{!! trans('admin.on') !!}',
        off: '{!! trans('admin.off') !!}'
      });
    })


    </script>

@endpush
