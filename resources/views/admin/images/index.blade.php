@extends('layouts.app')

@section('content')


@section('title',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.images') )
@section('PageHeading',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.images') )

<div class="panel panel-default">
    <div class="panel-body">
        {!! link_to_route('images.create',  trans('admin.add').' '. trans('admin.photo'),array(), array('class'=>'btn btn-primary ')) !!}


        {!! link_to_route('imagecategories.create',  trans('admin.add').' '. trans('admin.section'),array(), array('class'=>'btn btn-primary ')) !!}
    </div>
</div>


<div class="container-fluid">
    <div class="" style="">
        <div class="row" style="">
            <div class="">
                <div class="" style="clear:both">
                    {!! $images->links('vendor.pagination.bootstrap-4') !!}
                </div>
                @foreach($images as $image)
                    <div class="col-xs-6 col-md-3">
                        <div class="thumbnail">
                            <td><img src="/photos/{{ $image->name }}" width="100px" alt=""/></td>
                            <div class="caption">
                                {{--<p>{!! $imageCategory !!}</p>--}}
                                <p><a href="/admin/images/{!! $image->id !!}/edit" class="btn btn-primary"
                                      role="button">{!! trans('admin.edit') !!}</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="" style="clear:both">


                    {!! $images->links('vendor.pagination.bootstrap-4') !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
