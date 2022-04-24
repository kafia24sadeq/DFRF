@extends('layouts.app')
  @section('content')

    @section('title',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.users') )
    @section('PageHeading',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.users') )

    <div class="panel panel-default">
      <div class="panel-body">
        {!! link_to_route('users.create',  trans('admin.add').' '. trans('admin.user'),array(), array('class'=>'btn btn-primary')) !!}


        {!! link_to_route('imagecategories.create',  trans('admin.add').' '. trans('admin.role'),array(), array('class'=>'btn btn-primary')) !!}
      </div>
    </div>

    @if (session('status'))
      <div class ="alert alert-success">
        {{ session('status') }}
      </div>
    @endif
    @if ($users->isEmpty())
      <p> There is no role.</p>
    @else
      <table class ="table table-striped table-bordered table-hover table-sm">
        <thead>
          <tr>
            <th>{!!  trans('admin.name')  !!}</th>
            <th>{!!  trans('admin.email')  !!}</th>
            <th>{!!  trans('admin.role')  !!}</th>
            <th>{!!  trans('admin.edit')  !!}</th>
            <th>{!!  trans('admin.status')  !!}</th>
            <th>{!!  trans('admin.created_at')  !!}</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
            <tr>
              <td>{!! $user->name !!}</td>
              <td>{!! $user->email !!}</td>
              <td> @foreach($user->roles as $role)
                {{ $role->display_name }}
                @endforeach

              </td>
                <td>{!!    link_to_route('users.edit',  trans('admin.edit').' '. trans('admin.user'), $user->id, array('class'=>'btn btn-primary btn-xs'))  !!}</td>
                <td>{!! BlockedOrNot($user->status) !!}</td>
                <td>{!! Mydate($user->created_at) !!}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      @endif

    @endsection
