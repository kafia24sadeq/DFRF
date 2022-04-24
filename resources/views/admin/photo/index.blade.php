@extends('layouts.app')


@section('content')

  @section('title',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.images') )
  @section('PageHeading',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.images') )


    <div class="panel panel-default">
      <div class="panel-body">
          {!! link_to_route('pictures.create',  trans('admin.add').' '. trans('admin.image'),array(), array('class'=>'btn btn-primary ')) !!}
      </div>
    </div>

    <table class ="table table-striped table-bordered table-hover table-sm">
      <thead>
        <tr>
          <th>{!!  trans('admin.ID')  !!}</th>
          <th>{!!  trans('admin.image')  !!}</th>
          <th>{!!  trans('admin.edit')  !!}</th>
          <th>{!! trans('admin.date') !!}</th>
          <th>{!! trans('admin.status') !!}</th>
          <th>{!! trans('admin.delete') !!}</th>

        </tr>
      </thead>
      <tbody>


        @foreach($photos as $element)
          <tr>
            <td>{!! $element->id !!}</td>
            <td>
                <img style="width: 50px" src="/photos/{!! $element->name !!}" alt="">
            </td>
            <td>{!! link_to_route('pictures.edit',  trans('admin.edit').' '. trans('admin.image'), $element->id, array('class'=>'btn btn-primary btn-xs'))  !!}
              {{-- {!! link_to_route('elements.show',  trans('admin.details').' '. trans('admin.element'), $element->id, array('class'=>'btn btn-primary btn-xs'))  !!} --}}
            </td>
            <td>{!! Mydate($element->created_at) !!}</td>
            <td>{!! BlockedOrNot($element->status) !!}</td>
              <td>
                  {{ Form::open(array('url' => '/admin/pictures/' . $element->id,'onsubmit' => 'return ConfirmDelete()')) }}
                  {{ Form::hidden('_method', 'DELETE') }}
                  {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                  {{ Form::close() }}
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
{{ $photos->links('vendor.pagination.bootstrap-4') }}

@endsection
