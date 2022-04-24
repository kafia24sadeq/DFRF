@extends('layouts.app')
  @section('content')
    @section('title',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.roles') )
    @section('PageHeading',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.roles') )


        @if (session('status'))
          <div class ="alert alert-success">
            {{ session('status') }}
          </div>
        @endif
        @if ($roles->isEmpty())
          <p> There is no role.</p>
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
              @foreach($roles as $role)
                <tr>
                  <td>{!! $role->name !!}</td>
                  <td>{!! $role->display_name !!}</td>
                  <td>{!! $role->description !!}</td>
                  <td>{!! link_to_route('roles.edit',  trans('admin.edit').' '. trans('admin.role'), $role->id, array('class'=>'btn btn-primary btn-xs'))  !!}
                </tr>
              @endforeach
            </tbody>
          </table>
        @endif

  @endsection
