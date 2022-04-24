@if ($tasks->isEmpty())

@else



<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">{!! trans('admin.tasks') !!} </h3>
  </div>
  <div class="panel-body">

    <div class="table-responsive">

      <table class ="table table-striped table-bordered table-hover table-sm ">
        <thead>
          <tr>
            <th>{!!  trans('admin.title')  !!}</th>
            <th>{!!  trans('admin.priority')  !!}</th>
            <th>{!! trans('admin.assignedto') !!}</th>
            <th>{!! trans('admin.fromuser') !!}</th>
            <th>{!! trans('admin.state') !!}</th>

          </tr>
        </thead>
        <tbody>
          @foreach($tasks as $task)
            <tr>
              <td>{!! $task->title !!}</td>
              <td>{!! Priority($task->priority) !!}</td>
              <td>{!! $task->responsible->name !!}</td>
              <td>{!! $task->fromwho->name !!}</td>
              <td style="text-align:center">
                {!! Form::open( array('route' => array('tasks.update', $task->id),  'method' => 'PUT' , 'class'=>'', 'id'=>'put'.$task->id , 'name'=>'put'.$task->id)) !!}
                <input class="checkbox" type="checkbox" name="state" checked data-toggle="toggle" data-size="mini">
                {!! Form::close() !!}

              </td>

            </tr>
          @endforeach
        </tbody>
      </table>

      <div class="">

        {!! link_to_route('tasks.create',  trans('admin.create').' '. trans('admin.task'),array(),  array('class'=>'btn btn-primary btn-xs'))  !!}
        @permission('tasks.index')
        {!! link_to_route('tasks.index',  trans('admin.show').' '.trans('admin.all').' '. trans('admin.tasks'),array(),  array('class'=>'btn btn-primary btn-xs'))  !!}
        @endpermission
      </div>


        @push('scripts')
          <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
          <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
          <script src="/js/bootstrap-notify-master/bootstrap-notify.min.js" ></script>
          <link rel="stylesheet" href="/js/bootstrap-notify-master/animate.css" media="screen" title="no title" charset="utf-8">


          <script>
          $(function() {
            $('.checkbox').bootstrapToggle({
              on: '{!! trans('admin.online') !!}',
              off: '{!! trans('admin.offline') !!}'
            });
          })

          $(document).ready(function() {

    $('.checkbox').change(function() {
    });


});



$(document).ready(function() {
    $('.checkbox').change(function(event) {
      event.preventDefault();


    var  form = $(this).closest('form');
    var tr = $(this).parents('tr');
    tr.addClass('animated bounceOutLeft');



    $.ajax({
      url: form.attr('action'),
      type: "POST",
      data: form.serialize(),
      dataType: "json"
    })
    .done(function (response) {

      tr.hide();
      $.notify({
        // options
        title: 'success',

      },{
        // settings
        type: 'success',
        // showProgressbar: true,
      });


    })
    .fail(function (response) {
      if (response === 'Unauthorized.') {
      }else{

      }
      var errors = response.responseJSON;
      $(".alert").removeClass('alert-danger');
      $.each(errors, function (index, value) {

            $.notify({
            	// options
              title: 'error',

            	message: "<p>"+value+"</p>"
            },{
            	// settings
            	type: 'danger',
              // showProgressbar: true,
            });



      });
    });
  });
});
          </script>
        @endpush


    </div>
  </div>
</div>
@endif
