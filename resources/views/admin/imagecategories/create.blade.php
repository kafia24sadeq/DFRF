@extends('layouts.app')
@section('content')
  @section('title',  trans('admin.categories').' '.trans('admin.images') )
  @section('PageHeading',  trans('admin.categories').' '.trans('admin.images') )

  {!! Form::open(array('route' => array('imagecategories.store') , 'class'=>'' , 'id'=>'myform' , 'name'=>'myform')) !!}
  <div class="">

    @include('admin.imagecategories.form_partial')
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


  @foreach ($ImageCategory as $element)
  <tr>
    <td>{!!    $element->id !!}</td>
    <td>{!!    $element->name !!} </td>
    <td>{!!    link_to_route('imagecategories.edit',  trans('admin.edit').' '. trans('admin.section'), $element->id, array('class'=>'btn btn-primary btn-xs'))  !!}</td>
    <td>{!!    BlockedOrNot($element->status) !!}
</td>
</tr>
  @endforeach
</tbody>
</table>
@endsection
