@extends('layouts.app')


@section('content')

  @section('title',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.pages') )
  @section('PageHeading',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.pages') )


    <div class="panel panel-default">
      <div class="panel-body">
          {!! link_to_route('pages.create',  trans('admin.add').' '. trans('admin.page'),array(), array('class'=>'btn btn-primary ')) !!}


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


        @foreach($data as $element)
          <tr>
            <td>{!! $element->id !!}</td>
            <td>{!! $element->title !!}</td>
            <td>{!! link_to_route('pages.edit',  trans('admin.edit').' '. trans('admin.page'), $element->id, array('class'=>'btn btn-primary btn-xs'))  !!}
              {{-- {!! link_to_route('elements.show',  trans('admin.details').' '. trans('admin.element'), $element->id, array('class'=>'btn btn-primary btn-xs'))  !!} --}}
            </td>
            <td>{!! Mydate($element->created_at) !!}</td>
            <td>{!! BlockedOrNot($element->status) !!}

            </tr>
          @endforeach
        </tbody>
      </table>


@endsection
