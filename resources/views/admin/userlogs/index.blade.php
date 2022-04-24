@extends('layouts.app')

@section('content')

  @section('title',  trans('admin.show').' '.trans('admin.logs') )
  @section('PageHeading',  trans('admin.show').' '.trans('admin.logs') )


  @if (session('status'))
    <div class ="alert alert-success">
      {{ session('status') }}
    </div>
  @endif
  @if ($logs->isEmpty())
    <p> There is no role.</p>
  @else
    {{ $logs->links('vendor.pagination.bootstrap-4') }}

    <table class ="table table-striped table-bordered table-hover table-sm">
      <thead>
        <tr>
          <th>{!!  trans('admin.user')  !!}</th>
          <th>{!!  trans('admin.date')  !!}</th>
          <th>{!!  trans('admin.action')  !!}</th>
          <th>{!!  trans('admin.desc')  !!}</th>
          <th>{!!  trans('admin.ip')  !!}</th>
        </tr>
      </thead>
      <tbody>
        @foreach($logs as $log)
          <tr>
            <td>{!! $log->publisher->name !!}</td>
            <td>{!! Mydate($log->created_at) !!}</td>
            <td>{!! trans('admin'.str_replace('-','.',strstr($log->action, '-'))).' '.trans('admin.'.strstr($log->action, '-', true)) !!}</td>
            <td>{!! $log->desc !!}</td>
            <td>{!! $log->ip !!}</td>
          </tr>
        @endforeach
      </tbody>
    </table>

    {{ $logs->links('vendor.pagination.bootstrap-4') }}



  @endif


@endsection
