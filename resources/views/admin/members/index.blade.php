@extends('layouts.app')


@section('content')

  @section('title',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.members') )
  @section('PageHeading',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.members') )




    <table class ="table table-striped table-bordered table-hover table-sm">
      <thead>
        <tr>
          <th>{!!  trans('admin.ID')  !!}</th>
          <th>{!!  trans('admin.name')  !!}</th>
          <th>{!!  trans('admin.description')  !!}</th>

          <th>{!!  trans('admin.date')  !!}</th>
          <th>{!! trans('admin.status') !!}</th>
          <th>{!!  trans('admin.edit')  !!}</th>
          <th>{!!  trans('admin.delete')  !!}</th>
        </tr>
      </thead>
      <tbody>


        @foreach($members as $element)
          <tr>
            <td>{!! $element->id !!}</td>
            <td>{!! $element->name !!}</td>
            <td>{!! $element->content !!}</td>
            <td>{!! Mydate($element->created_at) !!}</td>
              <td>{!! BlockedOrNot($element->status) !!}</td>
              <td>
{{--            <td>{!! link_to_route('members.edit',  trans('admin.edit').' '. trans('admin.member'), $element->id, array('class'=>'btn btn-primary btn-xs'))  !!}--}}
                <a href="/admin/members/{{ $element->id }}/edit" class="btn btn-info">edit</a>
              {{-- {!! link_to_route('elements.show',  trans('admin.details').' '. trans('admin.element'), $element->id, array('class'=>'btn btn-primary btn-xs'))  !!} --}}
            </td>
              <td>
                  {{ Form::open(array('url' => '/admin/members/' . $element->id,'onsubmit' => 'return ConfirmDelete()')) }}
                  {{ Form::hidden('_method', 'DELETE') }}
                  {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                  {{ Form::close() }}
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
{{ $members->links('vendor.pagination.bootstrap-4') }}

@endsection
