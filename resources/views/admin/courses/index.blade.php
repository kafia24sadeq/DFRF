@extends('layouts.app')


@section('content')

  @section('title',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.courses') )
  @section('PageHeading',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.courses') )




    <table class ="table table-striped table-bordered table-hover table-sm">
      <thead>
        <tr>
          <th>{!!  trans('admin.ID')  !!}</th>
          <th>{!!  trans('admin.name')  !!}</th>
            <th>{!!  trans('admin.startingDate')  !!}</th>
            <th>{!!  trans('admin.trainerName')  !!}</th>
          <th>{!!  trans('admin.description')  !!}</th>
          <th>{!! trans('admin.courseHours') !!}</th>

          <th>{!! trans('admin.created_at') !!}</th>
          <th>{!! trans('admin.status') !!}</th>
          <th>{!!  trans('admin.edit')  !!}</th>
          <th>{!!  trans('admin.delete')  !!}</th>
        </tr>
      </thead>
      <tbody>


        @foreach($courses as $element)
          <tr>
            <td>{!! $element->id !!}</td>
            <td>{!! $element->name !!}</td>
            <td>{!! $element->starting_date !!}</td>
            <td>{!! $element->trainer_name !!}</td>
            <td>{!! $element->description !!}</td>
            <td>{!! $element->hours_no !!}</td>
            <td>{!! Mydate($element->created_at) !!}</td>
            <td>{!! BlockedOrNot($element->status) !!}
            <td>{!! link_to_route('courses.edit',  trans('admin.edit').' '. trans('admin.course'), $element->id, array('class'=>'btn btn-primary btn-xs'))  !!}
              {{-- {!! link_to_route('elements.show',  trans('admin.details').' '. trans('admin.element'), $element->id, array('class'=>'btn btn-primary btn-xs'))  !!} --}}
            </td>
              <td>
                  {{ Form::open(array('url' => '/admin/courses/' . $element->id, 'class' => '')) }}
                  {{ Form::hidden('_method', 'DELETE') }}
                  {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                  {{ Form::close() }}
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>


@endsection
