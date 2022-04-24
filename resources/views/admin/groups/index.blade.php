@extends('layouts.app')


@section('content')

  @section('title',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.groups') )
  @section('PageHeading',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.groups') )




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
          <th>{!!  trans('admin.delete')  !!}</th>
          <th>{!!  trans('admin.export')  !!}</th>
        </tr>
      </thead>
      <tbody>


        @foreach($groups as $element)
          <tr>
            <td>{!! $element->id !!}</td>
            <td>{!! $element->name !!}</td>
            <td>{!! $element->publish_date !!}</td>
            <td>{!! $element->location !!}</td>
            <td>{!! Mydate($element->created_at) !!}</td>
            <td>{!! BlockedOrNot($element->status) !!}
            <td>
                {!! link_to_route('groups.edit',  trans('admin.edit').' '. trans('admin.group'), $element->id, array('class'=>'btn btn-primary btn-xs'))  !!}
            </td>

              <td>
                  {{ Form::open(array('url' => '/admin/groups/' . $element->id, 'class' => '')) }}
                  {{ Form::hidden('_method', 'DELETE') }}
                  {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                  {{ Form::close() }}
              </td>

              <td>
{{--                  {!! link_to_route('groups.export', trans('admin.exportToExcel'), $element->id, array('class'=>'btn btn-primary btn-xs'))  !!}--}}
                  <a href="/admin/groups/{{ $element->id }}/export" class="btn btn-success">إستخراج إلى أكسل</a>

{{--                  <form action="/admin/groups/{{ $element->id }}/export" method="POST">--}}
{{--                        {{ csrf_field() }}--}}
{{--                        {{ method_field('get') }}--}}

{{--                      <button type="submit" class="btn btn-success">download</button>--}}
{{--                  </form>--}}
              </td>

            </tr>
          @endforeach
        </tbody>
      </table>


@endsection
