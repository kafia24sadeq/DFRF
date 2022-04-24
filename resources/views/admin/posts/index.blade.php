@extends('layouts.app')

@section('title',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.posts') )
@section('PageHeading',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.posts') )

@section('content')

<div class="panel panel-default" >
    <div class="panel-body">
        {!! link_to_route('posts.create',  trans('admin.add').' '. trans('admin.post'),array(), array('class'=>'btn btn-primary ')) !!}


        {!! link_to_route('categories.create',  trans('admin.add').' '. trans('admin.section'),array(), array('class'=>'btn btn-primary ')) !!}
    </div>
</div>

{{ $posts->links('vendor.pagination.bootstrap-4') }}

<table class ="table table-striped table-bordered table-hover table-sm" style="margin: 0;padding: 0">
    <thead>
    <tr>
        <th>{!!  trans('admin.ID')  !!}</th>
        <th>{!!  trans('admin.title')  !!}</th>
        <th>{!!  trans('admin.section')  !!}</th>
        <th>{!!  trans('admin.image')  !!}</th>
{{--        <th>{!!  trans('admin.user')  !!}</th>--}}
        <th>{!!  trans('admin.edit')  !!}</th>
        <th>{!!  trans('admin.delete')  !!}</th>
        <th>{!! trans('admin.date') !!}</th>
        <th>{!! trans('admin.status') !!}</th>
        <th>{!! trans('admin.count') !!}</th>
    </tr>
    </thead>
    <tbody>


    @foreach($posts as $post)
        <tr>
            <td>{!! $post->id !!}</td>
            <td>{!! $post->title !!}</td>
            <td>{!! $post->categories->name !!}</td>
            <td>  <img src= "{!! PhotosDir($post->getImage(), true) !!}" width="100px"  alt="" /></td> 
            <td>{!! link_to_route('posts.edit',  trans('admin.edit').' '. trans('admin.post'), $post->id, array('class'=>'btn btn-default btn-xs'))  !!}</td>
            <td>
                {{ Form::open(array('url' => '/admin/posts/' . $post->id,'onsubmit' => 'return ConfirmDelete()')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
            </td>
{{--            <td>{!! link_to_route('posts.show',  trans('admin.details').' '. trans('admin.post'), $post->id, array('class'=>'btn btn-default btn-xs'))  !!}</td>--}}
            <td>{!! Mydate($post->created_at) !!}</td>
            <td>{!! BlockedOrNot($post->status) !!}</td>
            <td>{!! $post->count !!}</td>

        </tr>
    @endforeach
    </tbody>
</table>

{{ $posts->links('vendor.pagination.bootstrap-4') }}



@endsection
