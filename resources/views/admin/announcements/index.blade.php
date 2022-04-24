@extends('layouts.app')


@section('content')
@section('title',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.the_announcements') )
@section('PageHeading',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.the_announcements') )

<div class="panel panel-default">
    <div class="panel-body">
        {!! link_to_route('announcements.create',  trans('admin.add').' '. trans('admin.announcement'),array(), array('class'=>'btn btn-primary ')) !!}
    </div>
</div>


{{ $announcements->links('vendor.pagination.bootstrap-4') }}

<table class ="table table-striped table-bordered table-hover table-sm">
    <thead>
    <tr>
        <th>{!!  trans('admin.ID')  !!}</th>
        <th>{!!  trans('admin.title')  !!}</th>
        <th>{!!  trans('admin.user')  !!}</th>
        <th>{!!  trans('admin.edit')  !!}</th>
        <th>{!! trans('admin.date') !!}</th>

    </tr>

    </thead>
    <tbody>


    @foreach($announcements as $post)
        <tr>
            <td>{!! $post->id !!}</td>
            <td>{!! $post->title !!}</td>
            <td>{!! $post->publisher->name !!}</td>
            <td>{!! link_to_route('announcements.edit',  trans('admin.edit').' '. trans('admin.the_announcement'), $post->id, array('class'=>'btn btn-primary btn-xs'))  !!}
            <td>{!! Mydate($post->created_at) !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>

{{ $announcements->links('vendor.pagination.bootstrap-4') }}



@endsection
