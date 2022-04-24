@extends('layouts.app')
@section('content')
@section('title',  trans('admin.create').' '.trans('admin.category') )

@section('PageHeading',  trans('admin.create').' '.trans('admin.category') )


  {!! Form::open(array('route' => array('categories.store') , 'class'=>'' , 'id'=>'myform' , 'name'=>'myform')) !!}
  <div class="">

    @include('admin.categories.form_partial')
  </div>
  <table class="table table-striped table-bordered table-hover table-sm" dir="rtl">
    <thead class="thead-inverse">
        <tr>
          <th>{!! trans('admin.ID') !!}</th>
          <th>{!! trans('admin.name') !!}</th>
          <th>{!! trans('admin.edit') !!}</th>
          <th>{!! trans('admin.status') !!}</th>
        </tr>
      </thead>
      <tbody>


  @foreach ($categories as $element)
  <tr>
    <td>{!!    $element->id !!}</td>
    <td>{!!    $element->name !!} </td>
    <td>{!!    link_to_route('categories.edit',  trans('admin.edit').' '. trans('admin.section'), $element->id, array('class'=>'btn btn-primary btn-xs'))  !!}</td>
    <td>{!!    BlockedOrNot($element->status) !!}
</td>
</tr>
  @endforeach
</tbody>
</table>
@endsection
