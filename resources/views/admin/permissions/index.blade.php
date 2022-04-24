@extends('layouts.app')
  @section('content')

    @section('title',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.permissions') )
    @section('PageHeading',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.permissions') )

        @if (session('status'))
          <div class ="alert alert-success">
            {{ session('status') }}
          </div>
        @endif
        @if ($permissions->isEmpty())
          <p> There is no permission.</p>
        @else
          <table class ="table table-striped table-bordered table-hover table-sm">
            <thead>
              <tr>
                <th>{!!  trans('admin.name')  !!}</th>
                <th>{!!  trans('admin.display_name')  !!}</th>
                <th>{!!  trans('admin.description')  !!}</th>
                <th>{!!  trans('admin.edit')  !!}</th>
              </tr>
            </thead>
            <tbody>
              @foreach($permissions as $permission)
                <tr>
                  <td>{!! $permission->name !!}</td>
                  <td>{!! trans('admin'.strstr($permission->display_name, '.')).' '.trans('admin.'.strstr($permission->display_name, '.', true)) !!}</td>
                  <td>{!! $permission->description !!}</td>
                  <td>{!! link_to_route('permissions.edit',  trans('admin.edit').' '. trans('admin.permission'), $permission->id, array('class'=>'btn btn-primary btn-xs'))  !!}

                </tr>
              @endforeach
            </tbody>
          </table>
        @endif

  @endsection
