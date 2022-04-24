@extends('layouts.app')

@section('content')

@section('title',  trans('admin.trash') )
@section('PageHeading',  trans('admin.trash') )



@if ($posts->isEmpty())
    <p> </p>
@else

    <div class="panel panel-default">
        <div class="panel-heading">{!! trans('admin.posts') !!}</div>
        <div class="panel-body">
            <table class ="table table-striped table-bordered table-hover table-sm">
                <thead>
                <tr>
                    <th>{!!  trans('admin.ID')  !!}</th>
                    <th>{!!  trans('admin.title')  !!}</th>
                    <th>{!!  trans('admin.section')  !!}</th>
                    <th>{!!  trans('admin.restore')  !!}</th>
                    <th>{!!  trans('admin.delete')  !!}</th>
                    <th>{!! trans('admin.deleted_at') !!}</th>

                </tr>
                </thead>
                <tbody>


                @foreach($posts as $post)
                    <tr>
                        <td>{!! $post->id !!}</td>
                        <td>{!! $post->title !!}</td>
                        <td>{!! $post->categories->name !!}</td>
                        <td>
                            {!! Form::open( array('route' => array('posts.update', $post->id),  'method' => 'PUT' , 'class'=>'', 'id'=>'myform'.$post->id , 'name'=>'myform'.$post->id)) !!}
                            {!! Form::button(trans('admin.restore').' '. trans('admin.post') , array('class'=>'btn btn-default actionable  btn-xs', 'id'=>'save'.$post->id)) !!}
                            {{ Form::hidden('action',  'restore' , array('id'=>'action'.$post->id) ) }}
                            {!! Form::close() !!}
                        </td>

                        <td>
                            {!! Form::open( array('route' => array('posts.destroy', $post->id),  'method' => 'delete' , 'class'=>'', 'id'=>'myform'.$post->id , 'name'=>'myform'.$post->id)) !!}
                            {!!  Form::button(trans('admin.delete').' '. trans('admin.post') , array('class'=>'btn btn-danger actionable  btn-xs', 'id'=>'delete'.$post->id)) !!}
                            {!! Form::close() !!}
                        </td>

                        <td>{!! Mydate($post->updated_at) !!}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endif

@if ($videos->isEmpty())
    <p> </p>
@else
    <div class="panel panel-default">
        <div class="panel-heading">{!! trans('admin.videos') !!}</div>
        <div class="panel-body">
            <table class ="table table-striped table-bordered table-hover table-sm">
                <thead>
                <tr>
                    <th>{!!  trans('admin.ID')  !!}</th>
                    <th>{!!  trans('admin.title')  !!}</th>
                    <th>{!!  trans('admin.section')  !!}</th>
                    <th>{!!  trans('admin.restore')  !!}</th>
                    <th>{!!  trans('admin.delete')  !!}</th>

                    <th>{!! trans('admin.deleted_at') !!}</th>

                </tr>
                </thead>
                <tbody>


                @foreach($videos as $element)
                    <tr>
                        <td>{!! $element->id !!}</td>
                        <td>{!! $element->title !!}</td>
                        <td>{!! $element->videoCategory->name !!}</td>
                        <td>
                            {!! Form::open( array('route' => array('videos.update', $element->id),  'method' => 'PUT' , 'class'=>'', 'id'=>'myform'.$element->id , 'name'=>'myform'.$element->id)) !!}
                            {!!  Form::button(trans('admin.restore').' '. trans('admin.video') , array('class'=>'btn btn-default actionable  btn-xs', 'id'=>'save'.$element->id)) !!}
                            {{ Form::hidden('action',  'restore' , array('id'=>'action'.$element->id) ) }}
                            {!! Form::close() !!}
                        </td>

                        <td>
                            {!! Form::open( array('route' => array('videos.destroy', $element->id),  'method' => 'delete' , 'class'=>'', 'id'=>'myform'.$element->id , 'name'=>'myform'.$element->id)) !!}
                            {!!  Form::button(trans('admin.delete').' '. trans('admin.video') , array('class'=>'btn btn-danger actionable  btn-xs', 'id'=>'delete'.$element->id)) !!}
                            {!! Form::close() !!}
                        </td>


                        <td>{!! Mydate($element->updated_at) !!}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endif


@if ($images->isEmpty())
    <p> </p>
@else
    <div class="panel panel-default">
        <div class="panel-heading">{!! trans('admin.images') !!}</div>
        <div class="panel-body">
            <table class ="table table-striped table-bordered table-hover table-sm">
                <thead>
                <tr>
                    <th>{!!  trans('admin.ID')  !!}</th>
                    <th>{!!  trans('admin.title')  !!}</th>
                    <th>{!!  trans('admin.section')  !!}</th>
                    <th>{!!  trans('admin.restore')  !!}</th>
                    <th>{!!  trans('admin.delete')  !!}</th>

                    <th>{!! trans('admin.deleted_at') !!}</th>

                </tr>
                </thead>
                <tbody>


                @foreach($images as $element)
                    <tr>

                        <td>{!! $element->id !!}</td>
                        <td>{!! $element->tags !!}</td>
                        <td>{!! $element->imageCategory->name !!}</td>

                        <td>
                            {!! Form::open( array('route' => array('images.update', $element->id),  'method' => 'PUT' , 'class'=>'', 'id'=>'imagesmyform'.$element->id , 'name'=>'imagesmyform'.$element->id)) !!}
                            {!!  Form::button(trans('admin.restore').' '. trans('admin.image') , array('class'=>'btn btn-default actionable  btn-xs', 'id'=>'imagessave'.$element->id)) !!}
                            {{ Form::hidden('action',  'restore' , array('id'=>'action'.$element->id) ) }}
                            {!! Form::close() !!}
                        </td>

                        <td>
                            {!! Form::open( array('route' => array('images.destroy', $element->id),  'method' => 'delete' , 'class'=>'', 'id'=>'myform'.$element->id , 'name'=>'myform'.$element->id)) !!}
                            {!!  Form::button(trans('admin.delete').' '. trans('admin.image') , array('class'=>'btn btn-danger actionable  btn-xs', 'id'=>'delete'.$element->id)) !!}
                            {!! Form::close() !!}
                        </td>

                        <td>{!! Mydate($element->updated_at) !!}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endif


@if ($pages->isEmpty())
    <p> </p>
@else

    <div class="panel panel-default">
        <div class="panel-heading">{!! trans('admin.pages') !!}</div>
        <div class="panel-body">
            <table class ="table table-striped table-bordered table-hover table-sm">
                <thead>
                <tr>
                    <th>{!!  trans('admin.ID')  !!}</th>
                    <th>{!!  trans('admin.title')  !!}</th>
                    <th>{!!  trans('admin.restore')  !!}</th>
                    <th>{!!  trans('admin.delete')  !!}</th>
                    <th>{!! trans('admin.deleted_at') !!}</th>

                </tr>
                </thead>
                <tbody>


                @foreach($pages as $element)
                    <tr>

                        <td>{!! $element->id !!}</td>
                        <td>{!! $element->title !!}</td>

                        <td>
                            {!! Form::open( array('route' => array('pages.update', $element->id),  'method' => 'PUT' , 'class'=>'', 'id'=>'imagesmyform'.$element->id , 'name'=>'imagesmyform'.$element->id)) !!}
                            {!!  Form::button(trans('admin.restore').' '. trans('admin.page') , array('class'=>'btn btn-default actionable  btn-xs', 'id'=>'imagessave'.$element->id)) !!}
                            {{ Form::hidden('action',  'restore' , array('id'=>'action'.$element->id) ) }}
                            {!! Form::close() !!}
                        </td>

                        <td>
                            {!! Form::open( array('route' => array('pages.destroy', $element->id),  'method' => 'delete' , 'class'=>'', 'id'=>'delete'.$element->id , 'name'=>'delete'.$element->id)) !!}
                            {!!  Form::button(trans('admin.delete').' '. trans('admin.page') , array('class'=>'btn btn-danger actionable  btn-xs', 'id'=>'delete'.$element->id)) !!}
                            {!! Form::close() !!}
                        </td>

                        <td>{!! Mydate($element->updated_at) !!}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>




@endif


@if ($cat->isEmpty())
    <p> </p>
@else

    <div class="panel panel-default">
        <div class="panel-heading">{!! trans('admin.categories') !!}</div>
        <div class="panel-body">
            <table class ="table table-striped table-bordered table-hover table-sm">
                <thead>
                <tr>
                    <th>{!!  trans('admin.ID')  !!}</th>
                    <th>{!!  trans('admin.title')  !!}</th>
                    <th>{!!  trans('admin.restore')  !!}</th>
                    <th>{!!  trans('admin.delete')  !!}</th>
                    <th>{!! trans('admin.deleted_at') !!}</th>

                </tr>
                </thead>
                <tbody>


                @foreach($cat as $element)
                    <tr>

                        <td>{!! $element->id !!}</td>
                        <td>{!! $element->name !!}</td>

                        <td>
                            {!! Form::open( array('route' => array('categories.update', $element->id),  'method' => 'PUT' , 'class'=>'', 'id'=>'imagesmyform'.$element->id , 'name'=>'imagesmyform'.$element->id)) !!}
                            {!!  Form::button(trans('admin.restore').' '. trans('admin.category') , array('class'=>'btn btn-default actionable  btn-xs', 'id'=>'imagessave'.$element->id)) !!}
                            {{ Form::hidden('action',  'restore' , array('id'=>'action'.$element->id) ) }}
                            {!! Form::close() !!}
                        </td>

                        <td>
                            {!! Form::open( array('route' => array('categories.destroy', $element->id),  'method' => 'delete' , 'class'=>'', 'id'=>'delete'.$element->id , 'name'=>'delete'.$element->id)) !!}
                            {!!  Form::button(trans('admin.delete').' '. trans('admin.category') , array('class'=>'btn btn-danger actionable  btn-xs', 'id'=>'delete'.$element->id)) !!}
                            {!! Form::close() !!}
                        </td>

                        <td>{!! Mydate($element->updated_at) !!}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>










@endif


@if ($user->isEmpty())
    <p> </p>
@else










    <div class="panel panel-default">
        <div class="panel-heading">{!! trans('admin.users') !!}</div>
        <div class="panel-body">
            <table class ="table table-striped table-bordered table-hover table-sm">
                <thead>
                <tr>
                    <th>{!!  trans('admin.ID')  !!}</th>
                    <th>{!!  trans('admin.title')  !!}</th>
                    <th>{!!  trans('admin.restore')  !!}</th>
                    <th>{!!  trans('admin.delete')  !!}</th>
                    <th>{!! trans('admin.deleted_at') !!}</th>

                </tr>
                </thead>
                <tbody>


                @foreach($user as $element)
                    <tr>

                        <td>{!! $element->id !!}</td>
                        <td>{!! $element->name !!}</td>

                        <td>
                            {!! Form::open( array('route' => array('users.update', $element->id),  'method' => 'PUT' , 'class'=>'', 'id'=>'imagesmyform'.$element->id , 'name'=>'imagesmyform'.$element->id)) !!}
                            {!!  Form::button(trans('admin.restore').' '. trans('admin.user') , array('class'=>'btn btn-default actionable  btn-xs', 'id'=>'imagessave'.$element->id)) !!}
                            {{ Form::hidden('action',  'restore' , array('id'=>'action'.$element->id) ) }}
                            {!! Form::close() !!}
                        </td>

                        <td>
                            {!! Form::open( array('route' => array('users.destroy', $element->id),  'method' => 'delete' , 'class'=>'', 'id'=>'delete'.$element->id , 'name'=>'delete'.$element->id)) !!}
                            {!!  Form::button(trans('admin.delete').' '. trans('admin.user') , array('class'=>'btn btn-danger actionable  btn-xs', 'id'=>'delete'.$element->id)) !!}
                            {!! Form::close() !!}
                        </td>

                        <td>{!! Mydate($element->updated_at) !!}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endif

@endsection


@push('scripts')
@include('admin.jquery.actionajax')
@endpush
