@extends('layouts.app')


@section('content')

  @section('title',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.polls') )
  @section('PageHeading',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.polls') )


    <div class="panel panel-default">
      <div class="panel-body">
          {!! link_to_route('polls.create',  trans('admin.add').' '. trans('admin.poll'),array(), array('class'=>'btn btn-primary ')) !!}
      </div>
    </div>

    <table class ="table table-striped table-bordered table-hover table-sm">
      <thead>
        <tr>
          <th>{!!  trans('admin.ID')  !!}</th>
          <th>{!!  trans('admin.question')  !!}</th>
          <th>{!!  trans('admin.edit')  !!}</th>
          <th>{!!  trans('admin.show')  !!}</th>
          <th>{!! trans('admin.date') !!}</th>
          <th>{!! trans('admin.status') !!}</th>

        </tr>
      </thead>
      <tbody>


        @foreach($data as $element)
          <tr>
            <td>{!! $element->id !!}</td>
            <td>{!! $element->question !!}</td>
            <td>{!! link_to_route('polls.edit',  trans('admin.edit').' '. trans('admin.poll'), $element->id, array('class'=>'btn btn-primary btn-xs'))  !!}
            <td>{!! link_to_route('polls.show',  trans('admin.show').' '. trans('admin.poll'), $element->id, array('class'=>'btn btn-primary btn-xs'))  !!}
              {{-- {!! link_to_route('elements.show',  trans('admin.details').' '. trans('admin.element'), $element->id, array('class'=>'btn btn-primary btn-xs'))  !!} --}}
            </td>
            <td>{!! Mydate($element->created_at) !!}</td>
            <td>{!! BlockedOrNot($element->status) !!}

            </tr>
          @endforeach
        </tbody>
      </table>


@endsection
