@extends('layouts.app')
@section('title',  trans('admin.controlpanel') )
@section('PageHeading',  trans('admin.controlpanel') )
@section('content')


    <div class="panel panel-default">
        <div class="panel-body">
            <div class="btn-group">
                {!! link_to_route('posts.create',  trans('admin.add').' '. trans('admin.post'),array(), array('class'=>'btn btn-primary ')) !!}
                {!! link_to_route('videos.create',  trans('admin.add').' '. trans('admin.video'),array(), array('class'=>'btn btn-primary ')) !!}
                {!! link_to_route('mail.index',  trans('admin.mail'),array(), array('class'=>'btn btn-primary ')) !!}
                {!! link_to_route('categories.create',  trans('admin.add').' '. trans('admin.category'),array(), array('class'=>'btn btn-primary ')) !!}
            </div>
        </div>
    </div>

    @if (session('status'))
        <div class ="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="">
        <div class="" style="">
            {{--@widget('TasksWidget')--}}
            @widget('MailWidget')
            <div class="panel panel-default" style="margin: 0;padding: 0">
                <div class="panel-heading">
                    <h3 class="panel-title">{!! trans('admin.recent').'  '.trans('admin.posts') !!} </h3>
                </div>
                <div class="panel-body">

                    @if ($posts->isEmpty())
                        <p> </p>
                    @else
                        <div id="no-more-tables" class=" nmt">
                            <table class ="table table-striped table-bordered table-hover table-sm">
                                <thead>
                                <tr>
                                    <th>{!!  trans('admin.ID')  !!}</th>
                                    <th>{!!  trans('admin.title')  !!}</th>
                                    <th>{!!  trans('admin.section')  !!}</th>
                                    <th>{!!  trans('admin.user')  !!}</th>
                                    <th>{!!  trans('admin.edit')  !!}</th>
                                    <th>{!!  trans('admin.details')  !!}</th>
                                    <th>{!!  trans('admin.created_at')  !!}</th>
                                    <th>{!! trans('admin.count') !!}</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td data-title="{!!  trans('admin.ID')  !!}">{!! $post->id !!}</td>
                                        <td data-title="{!!  trans('admin.title')  !!}">{!! BlockedOrNot($post->status) !!}  {!! $post->title !!}</td>
{{--                                        <td data-title="{!!  trans('admin.category   ')  !!}">{!! $post->categories->name !!}</td>--}}
{{--                                        <td data-title="{!!  trans('admin.user')  !!}">{!! $post->publisher->name !!}</td>--}}
                                        <td data-title="{!!  trans('admin.edit')  !!}">{!! link_to_route('posts.edit',  trans('admin.edit'), $post->id, array('class'=>'btn btn-default btn-xs'))  !!}
                                        </td>
                                        <td data-title="{!!  trans('admin.details')  !!}">
                                            <a href='{!! route("posts.show",["id" => $post->id] ) !!}' class="btn btn-default btn-xs"> {!! trans('admin.details') !!}</a>
                                        </td>
                                        <td data-title="{!!  trans('admin.created_at')  !!}">{!! Mydate($post->created_at) !!}</td>
                                        <td data-title="{!! trans('admin.count') !!}">{!! $post->count !!}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        {!! link_to_route('posts.index',  trans('admin.show').' '.trans('admin.all').' '. trans('admin.posts'),array(),  array('class'=>'btn btn-primary btn-xs'))  !!}

                    @endif
                </div>

            </div>


            {{--scheduled--}}
            @if ($scheduled->isEmpty())
                <p> </p>
            @else
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">{!! trans('admin.scheduled') !!} </h3>
                    </div>
                    <div class="panel-body">
                        <table class ="table table-striped table-bordered table-hover table-sm">
                            <thead>
                            <tr>
                                <th>{!!  trans('admin.ID')  !!}</th>
                                <th>{!!  trans('admin.name')  !!}</th>
                                <th>{!!  trans('admin.email')  !!}</th>
                                <th>{!!  trans('admin.user')  !!}</th>
                                <th>{!!  trans('admin.edit')  !!}</th>
                                <th>{!!  trans('admin.created_at')  !!}</th>
                                <th>{!!  trans('admin.date')  !!}</th>
                                <th>{!! trans('admin.status') !!}</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($scheduled as $post)
                                <tr>
                                    <td>{!! $post->id !!}</td>
                                    <td>{!! $post->title !!}</td>
                                    <td>{!! $post->categories->name !!}</td>
                                    <td>{!! $post->publisher->name !!}</td>
                                    {{--@if($post->type == 0)--}}
                                        <td>{!! link_to_route('posts.edit',  trans('admin.edit').' '. trans('admin.post'), $post->id, array('class'=>'btn btn-default btn-xs'))  !!}
                                        </td>
                                    {{--@elseif($post->type == 1 )--}}
                                        {{--<td>{!! link_to_route('articles.edit',  trans('admin.edit').' '. trans('admin.article'), $post->id, array('class'=>'btn btn-default btn-xs'))  !!}--}}

                                    {{--@endif--}}
                                    <td>{!! Mydate($post->created_at) !!}</td>
                                    <td>{!! Mydate($post->date) !!}</td>
                                    <td>{!! BlockedOrNot($post->status) !!}

                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {!! link_to_route('posts.index',  trans('admin.show').' '.trans('admin.all').' '. trans('admin.posts'),array(),  array('class'=>'btn btn-primary btn-xs'))  !!}

                    </div>
                    @endif



                    @if ($drafts->isEmpty())
                        <p> </p>
                    @else

                    {{--drafts--}}
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">{!! trans('admin.drafts') !!} </h3>
                            </div>
                            <div class="panel-body">
                                    <table class ="table table-striped table-bordered table-hover table-sm">
                                        <thead>
                                        <tr>
                                            <th>{!!  trans('admin.ID')  !!}</th>
                                            <th>{!!  trans('admin.name')  !!}</th>
                                            <th>{!!  trans('admin.email')  !!}</th>
                                            <th>{!!  trans('admin.user')  !!}</th>
                                            <th>{!!  trans('admin.edit')  !!}</th>
                                            <th>{!!  trans('admin.created_at')  !!}</th>
                                            <th>{!!  trans('admin.date')  !!}</th>
                                            <th>{!! trans('admin.status') !!}</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($drafts as $post)
                                            <tr>
                                                <td>{!! $post->id !!}</td>
                                                <td>{!! $post->title !!}</td>
                                                <td>{!! $post->categories->name !!}</td>
                                                <td>{!! $post->publisher->name !!}</td>
{{--                                                @if($post->type == 0)--}}
                                                    <td>{!! link_to_route('posts.edit',  trans('admin.edit').' '. trans('admin.post'), $post->id, array('class'=>'btn btn-default btn-xs'))  !!}
                                                    </td>
                                                {{--@elseif($post->type == 1 )--}}
                                                    {{--<td>{!! link_to_route('articles.edit',  trans('admin.edit').' '. trans('admin.article'), $post->id, array('class'=>'btn btn-default btn-xs'))  !!}--}}

                                                {{--@endif--}}
                                                <td>{!! Mydate($post->created_at) !!}</td>
                                                <td>{!! Mydate($post->date) !!}</td>

                                                <td>{!! BlockedOrNot($post->status) !!}

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                    {!! link_to_route('posts.index',  trans('admin.show').' '.trans('admin.all').' '. trans('admin.posts'),array(),  array('class'=>'btn btn-primary btn-xs'))  !!}

                            </div>
                        </div>
                            @endif

                            @widget('ArchiveWidget')

                        @push("sidebar")

                        <div>
                            {{--@widget('StatisticsWidget')--}}
                        </div>
                        <div >


                            <div>
                                {{--@widget('TrashWidget')--}}
                            </div>
                            {{--<div class="col-lg-6" style="">--}}
                            {{--{{ Widget::run('statsWidget') }}--}}
                            {{--</div>--}}

                        </div>
                        @endpush

                </div>
        </div>

@endsection
