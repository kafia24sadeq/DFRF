@extends('layouts.app')


@section('content')

  @section('title',  trans('admin.show').' '.trans('admin.files') )
  @section('PageHeading',  trans('admin.show').' '.trans('admin.files') )


    <div class="panel panel-default">
      <div class="panel-body">
          {!! link_to_route('uploadfiles.create',  trans('admin.add').' '. trans('admin.file'),array(), array('class'=>'btn btn-primary ')) !!}


      </div>
    </div>

    <table class ="table table-striped table-bordered table-hover table-sm">
      <thead>
        <tr>
          <th>{!!  trans('admin.ID')  !!}</th>
          <th>{!!  trans('admin.name')  !!}</th>
          <th>{!!  trans('admin.link')  !!}</th>
          <th>{!! trans('admin.date') !!}</th>

        </tr>
      </thead>
      <tbody>


        @foreach($uploads as $element)
          <tr>
            <td>{!! $element->id !!}</td>
            <td>{!! $element->name !!}</td>
            <td dir=""ltr style="text-align: left; "><input style="width: 100%" type="text" value="{!! "files/".$element->link !!}"> </td>

            <td>{!! Mydate($element->created_at) !!}</td>

            </tr>
          @endforeach
        </tbody>
      </table>


@endsection
