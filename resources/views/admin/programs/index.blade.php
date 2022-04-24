@extends('layouts.app')


@section('content')

  @section('title',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.programs') )
  @section('PageHeading',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.programs') )


    <div class="panel panel-default">
      <div class="panel-body">
          {!! link_to_route('programs.create',  trans('admin.add').' '. trans('admin.program'),array(), array('class'=>'btn btn-primary ')) !!}
      </div>
    </div>

    <table class ="table table-striped table-bordered table-hover table-sm">
      <thead>
        <tr>
          <th>{!!  trans('admin.ID')  !!}</th>
          <th>{!!  trans('admin.title')  !!}</th>
          <th>{!!  trans('admin.edit')  !!}</th>
          <th>{!! trans('admin.date') !!}</th>
          <th>{!! trans('admin.status') !!}</th>

        </tr>
      </thead>
      <tbody>


        @foreach($programs as $element)
          <tr>
            <td>{!! $element->id !!}</td>
            <td>{!! $element->name !!}</td>
            <td>{!! link_to_route('programs.edit',  trans('admin.edit').' '. trans('admin.program'), $element->id, array('class'=>'btn btn-primary btn-xs'))  !!}
              {{-- {!! link_to_route('elements.show',  trans('admin.details').' '. trans('admin.element'), $element->id, array('class'=>'btn btn-primary btn-xs'))  !!} --}}
            </td>
            <td>{!! Mydate($element->created_at) !!}</td>
            <td>{!! BlockedOrNot($element->status) !!}</td>

            </tr>
          @endforeach
        </tbody>
      </table>


@endsection
