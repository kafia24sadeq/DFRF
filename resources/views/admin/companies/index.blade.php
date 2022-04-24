@extends('layouts.app')


@section('content')

  @section('title',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.companies') )
  @section('PageHeading',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.companies') )




    <table class ="table table-striped table-bordered table-hover table-sm">
      <thead>
        <tr>
          <th>{!!  trans('admin.ID')  !!}</th>
          <th>{!!  trans('admin.title')  !!}</th>
          <th>{!!  trans('admin.description')  !!}</th>
          <th>{!! trans('admin.location') !!}</th>
          <th>{!!  trans('admin.date')  !!}</th>
          <th>{!! trans('admin.status') !!}</th>
          <th>{!!  trans('admin.edit')  !!}</th>
        </tr>
      </thead>
      <tbody>


        @foreach($company as $element)
          <tr>
            <td>{!! $element->id !!}</td>
            <td>{!! $element->title !!}</td>
            <td>{!! $element->description !!}</td>
            <td>{!! $element->location !!}</td>
            <td>{!! Mydate($element->created_at) !!}</td>
            <td>{!! BlockedOrNot($element->status) !!}
            <td>{!! link_to_route('companies.edit',  trans('admin.edit').' '. trans('admin.company'), $element->id, array('class'=>'btn btn-primary btn-xs'))  !!}
              {{-- {!! link_to_route('elements.show',  trans('admin.details').' '. trans('admin.element'), $element->id, array('class'=>'btn btn-primary btn-xs'))  !!} --}}
            </td>
            </tr>
          @endforeach
        </tbody>
      </table>


@endsection
