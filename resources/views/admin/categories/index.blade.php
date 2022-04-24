@extends('layouts.app')
@section('content')
@section('title',  trans('admin.create').' '.trans('admin.category') )

@section('PageHeading',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.categories') )


  <div class="panel panel-default">
    <div class="panel-body">
      {!! link_to_route('categories.create',  trans('admin.add').' '. trans('admin.category'),array(), array('class'=>'btn btn-primary ')) !!}

      {!! link_to_route('videos.create',  trans('admin.add').' '. trans('admin.video'),array(), array('class'=>'btn btn-primary ')) !!}

    </div>
  </div>



  <table class="table table-striped table-bordered table-hover table-sm" dir="rtl">
    <thead class="thead-inverse">
        <tr>
          <th>{!! trans('admin.ID') !!}</th>
          <th>{!! trans('admin.name') !!}</th>
          <th>{!! trans('admin.edit') !!}</th>
          <th>{!! trans('admin.status') !!}</th>
          <th>{!! trans('admin.number').' '.trans('admin.of').trans('admin.posts') !!}</th>
        </tr>
      </thead>
      <tbody>


  @foreach ($categories as $element)
  <tr>
    <td>{!!    $element->id !!}</td>
    <td>{!!    $element->name !!} </td>
    <td>{!!    link_to_route('categories.edit',  trans('admin.edit').' '. trans('admin.section'), $element->id, array('class'=>'btn btn-primary btn-xs'))  !!}</td>
    <td>{!!    BlockedOrNot($element->status) !!}
    <td>{!!    $element->posts->count() !!}</td>
</td>
</tr>
  @endforeach
</tbody>
</table>
@endsection
