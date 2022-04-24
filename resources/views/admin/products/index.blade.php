@extends('layouts.app')

@section('content')

  @section('title',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.products') )
  @section('PageHeading',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.products') )

  <div class="panel panel-default">
    <div class="panel-body">
      {!! link_to_route('products.create',  trans('admin.add').' '. trans('admin.product'),array(), array('class'=>'btn btn-primary ')) !!}


      {!! link_to_route('productcategories.create',  trans('admin.add').' '. trans('admin.section'),array(), array('class'=>'btn btn-primary ')) !!}
    </div>
  </div>

{!! $products->links('vendor.pagination.bootstrap-4') !!}
<table class ="table table-striped table-bordered table-hover table-sm" style="margin: 0;padding: 0">
  <thead>
  <tr>
    <th>{!!  trans('admin.ID')  !!}</th>
    <th>{!!  trans('admin.name')  !!}</th>
    <th>{!!  trans('admin.section')  !!}</th>
    <th>{!!  trans('admin.image')  !!}</th>
    <th>{!!  trans('admin.user')  !!}</th>
    <th>{!!  trans('admin.edit')  !!}</th>
    <th>{!!  trans('admin.details')  !!}</th>
    <th>{!! trans('admin.date') !!}</th>
    <th>{!! trans('admin.status') !!}</th>
  </tr>
  </thead>
  <tbody>


  @foreach($products as $key => $value)
    <tr>
      <td>{!! $value->id !!}</td>
      <td>{!! $value->name !!}</td>
      <td>{!! $value->productCategory->name !!}</td>
      <td>  <img src= "{!! PhotosDir($value->image_name, true) !!}" width="100px"  alt="" /></td>
      <td>{!! $value->publisher->name !!}</td>
      <td>{!! link_to_route('products.edit',  trans('admin.edit').' '. trans('admin.the_product'), $value->id, array('class'=>'btn btn-default btn-xs'))  !!}
      </td>
      <td>{!! link_to_route('products.show',  trans('admin.details').' '. trans('admin.the_product'), $value->id, array('class'=>'btn btn-default btn-xs'))  !!}</td>
      <td>{!! Mydate($value->created_at) !!}</td>
      <td>{!! BlockedOrNot($value->status) !!}</td>
    </tr>
  @endforeach
  </tbody>
</table>

  {{--<div class="container-fluid">--}}
    {{--<div class="" style="">--}}
      {{--<div class="row" style="">--}}
        {{--<div class="">--}}
          {{--@foreach($products as $key => $value)--}}
            {{--<div class="col-xs-6 col-md-3" >--}}
              {{--<div class="thumbnail">--}}
                {{--<img src="{!! $value->image !!}" width="100%" style="height: 200px; " alt="" />--}}

                {{--<div class="caption">--}}
                  {{--<p>{!! $value->title !!}</p>--}}
                  {{--<p>{!! $value->productCategory->name !!}</p>--}}
                  {{--{!! link_to_route('products.edit', trans('admin.edit')  ,$value->id, array('class'=>'btn btn-primary btn-sm')) !!}--}}

                {{--</div>--}}
              {{--</div>--}}
            {{--</div>--}}
          {{--@endforeach--}}

          {{--<div class="" style="clear:both">--}}


            {{--{!! $products->links('vendor.pagination.bootstrap-4') !!}--}}
          {{--</div>--}}
        {{--</div>--}}
      {{--</div>--}}
    {{--</div>--}}
  {{--</div>--}}

@endsection
