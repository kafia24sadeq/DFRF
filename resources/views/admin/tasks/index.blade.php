@extends('layouts.app')

@section('content')

  @section('title',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.tasks') )
  @section('PageHeading',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.tasks') )

  {{ $tasks->links('vendor.pagination.bootstrap-4') }}

  <div class="table-responsive">

    <table class ="table table-striped table-bordered table-hover table-sm ">
      <thead>
        <tr>
          <th>{!!  trans('admin.title')  !!}</th>
          <th>{!!  trans('admin.priority')  !!}</th>
          <th>{!! trans('admin.status') !!}</th>
          <th>{!! trans('admin.edit') !!}</th>

        </tr>
      </thead>
      <tbody>
        @foreach($tasks as $task)
          <tr>
            <td>{!! $task->title !!}</td>
            <td>{!! Priority($task->priority) !!}</td>
            <td>{!! $task->responsible->name !!}</td>
            <td>{!! link_to_route('tasks.edit',  trans('admin.edit').' '. trans('admin.task'), $task->id, array('class'=>'btn btn-primary btn-xs'))  !!}

          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  {{ $tasks->links('vendor.pagination.bootstrap-4') }}


@endsection
