@extends('layouts.app')
@section('content')

@section('title',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.works') )
@section('PageHeading',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.works') )

<div class="panel panel-default">
    <div class="panel-body">
        {!! link_to_route('works.create',  trans('admin.add').' '. trans('admin.work'),array(), array('class'=>'btn btn-primary ')) !!}


    </div>
</div>

<table class ="table table-striped table-bordered table-hover table-sm">
    <thead>
    <tr>
        <th>{!!  trans('admin.ID')  !!}</th>
        <th>{!!  trans('admin.name')  !!}</th>
        <th>{!!  trans('admin.image')  !!}</th>
        <th>{!!  trans('admin.edit')  !!}</th>
        <th>{!! trans('admin.date') !!}</th>
    </tr>
    </thead>
    <tbody>

    @foreach($works as $element)
        <tr>
            <td>{!! $element->id !!}</td>
            <td>{!! $element->name !!}</td>
            <td>  <img src= "{!! PhotosDir($element->image_name, true) !!}" width="100px"  alt="" /></td>
            <td>{!! link_to_route('works.edit',  trans('admin.edit').' '. trans('admin.work'), $element->id, array('class'=>'btn btn-primary btn-xs'))  !!}
                {{-- {!! link_to_route('elements.show',  trans('admin.details').' '. trans('admin.element'), $element->id, array('class'=>'btn btn-primary btn-xs'))  !!} --}}
            </td>
            <td>{!! Mydate($element->created_at) !!}</td>

        </tr>
    @endforeach
    </tbody>
</table>



@endsection