@extends('layouts.app')


@section('content')

  @section('title',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.advertisements') )
  @section('PageHeading',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.advertisements') )




    <table class ="table table-striped table-bordered table-hover table-sm">
      <thead>
        <tr>
          <th>{!!  trans('admin.ID')  !!}</th>
          <th>{!!  trans('admin.area')  !!}</th>
          <th>{!!  trans('admin.side')  !!}</th>
          <th>{!! trans('admin.date') !!}</th>
          <th>{!! trans('admin.status') !!}</th>
        </tr>
      </thead>
      <tbody>


        @foreach($data as $element)
          <tr>
            <td>{!! $element->area !!}</td>
            <td>{!! $element->side !!}</td>
            <td>{!! link_to_route('advertisements.edit',  trans('admin.edit').' '. trans('admin.advertisements'), $element->id, array('class'=>'btn btn-primary btn-xs'))  !!}
              {{-- {!! link_to_route('elements.show',  trans('admin.details').' '. trans('admin.element'), $element->id, array('class'=>'btn btn-primary btn-xs'))  !!} --}}
            </td>
            <td>{!! Mydate($element->created_at) !!}</td>
            <td>{!! BlockedOrNot($element->status) !!}

            </tr>
          @endforeach
        </tbody>
      </table>


@endsection
