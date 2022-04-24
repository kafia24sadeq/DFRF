@extends('layouts.app')

@section('content')

  @section('title',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.videos') )
  @section('PageHeading',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.videos') )

  <div class="panel panel-default">
    <div class="panel-body">
      {!! link_to_route('videos.create',  trans('admin.add').' '. trans('admin.video'),array(), array('class'=>'btn btn-primary ')) !!}


      {!! link_to_route('videocategories.create',  trans('admin.add').' '. trans('admin.section'),array(), array('class'=>'btn btn-primary ')) !!}
    </div>
  </div>

{!! $videos->links('vendor.pagination.bootstrap-4') !!}

  <div class="container-fluid">
    <div class="" style="">
      <div class="row" style="">
        <div class="">
          @foreach($videos as $key => $value)
            <div class="col-xs-6 col-md-3" >
              <div class="thumbnail">
                <img src="{!! $value->image_name !!}" width="100%" style="height: 200px; " alt="" />

                <div class="caption">
                  <p>{!! $value->title !!}</p>
                  <p>{!! $value->videoCategory->name !!}</p>
                  {!! link_to_route('videos.edit', trans('admin.edit')  ,$value->id, array('class'=>'btn btn-primary btn-sm')) !!}

                </div>
              </div>
            </div>
          @endforeach

          <div class="" style="clear:both">


            {!! $videos->links('vendor.pagination.bootstrap-4') !!}
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
