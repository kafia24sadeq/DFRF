@extends('layouts.app')

@section('title',  trans('admin.details').' '.trans('admin.post')." ".$post->title )
@section('PageHeading',   trans('admin.details').' '.trans('admin.post')." ".$post->title )
{{--@section('breadcrumbs', Breadcrumbs::render('posts.index'))--}}

@section('content')

<div class="panel panel-default">
  <div class="panel-body">
      {!! link_to_route('posts.edit',  trans('admin.edit').' '. trans('admin.post'), $post->id, array('class'=>'btn btn-primary '))  !!}

      {!! link_to_route('post',  trans('admin.show').' '. trans('admin.post'), $post->id, array("target"=>"_blank",'class'=>'btn btn-primary '))  !!}
  </div>
</div>



<table class ="table table-striped table-bordered table-hover table-sm">
  <thead>
  <tr><td style="width:10%">{!!  trans('admin.ID')  !!}</td> <td>{!! $post->id !!}</td> </tr>
  <tr><td style="width:10%">{!!  trans('admin.status')  !!}</td> <td>{!! BlockedOrNot($post->status) !!}</td> </tr>
  <tr><td style="width:10%">{!!  trans('admin.section')  !!}</td><td>{!! $post->categories->name !!}</td></tr>
  <tr><td style="width:10%">{!!  trans('admin.introductory')  !!}</td><td><h4>{!! $post->introductory !!}</h4></td></tr>
  <tr><td style="width:10%">{!!  trans('admin.title')  !!}</td><td><h1>{!! $post->title !!}</h1></td></tr>
  <tr><td style="width:10%">{!!  trans('admin.count')  !!}</td><td><span class="badge">{!! $post->count !!}</span></td></tr>
  <tr><td style="width:10%">{!!  trans('admin.user')  !!}</td><td><b>{!! $post->publisher->name !!}</b></td></tr>

  <tr><td style="width:10%">{!!  trans('admin.created_at')  !!}</td><td>{!! $post->created_at." | ".Mydate($post->created_at) !!}</td></tr>
  <tr><td style="width:10%">{!!  trans('admin.updated_at')  !!}</td><td>{!! $post->updated_at." | ".Mydate($post->updated_at) !!}</td></tr>
  <tr><td style="width:10%">{!!  trans('admin.pub_date')  !!}</td><td>{!! $post->date." | ".Mydate($post->date) !!}</td></tr>
  <tr><td style="width:10%">{!!  trans('admin.photo')  !!}</td><td><img src="{!! PhotosDir($post->getImage(), true) !!}" alt=""></td></tr>
  <tr><td style="width:10%">{!!  trans('admin.caption')  !!}</td><td>{!! $post->caption !!}</td></tr>
  <tr><td style="width:10%">{!!  trans('admin.source')  !!}</td><td>{!! $post->getSource() !!}</td></tr>
  <tr><td style="width:10%">{!!  trans('admin.importance')  !!}</td><td>{!! YesOrNo($post->importance) !!}</td></tr>
  <tr><td style="width:10%">{!!  trans('admin.editor_choice')  !!}</td><td>{!! YesOrNo($post->editor_choice) !!}</td></tr>
  <tr><td style="width:10%">{!!  trans('admin.comments_status')  !!}</td><td>{!! YesOrNo($post->comments_status) !!}</td></tr>
  <tr><td style="width:10%">{!!  trans('admin.content')  !!}</td><td>{!! $post->content !!}</td></tr>
  <tr><td style="width:10%">{!!  trans('admin.tags')  !!}</td><td>{!! $post->tags !!}</td></tr>




  </thead>
  <tbody>


    <tr>


    </tr>
  </tbody>
</table>

<div class="panel panel-default">
    <div class="panel-body">
        {!! link_to_route('posts.edit',  trans('admin.edit').' '. trans('admin.post'), $post->id, array('class'=>'btn btn-primary '))  !!}

        {!! link_to_route('post',  trans('admin.show').' '. trans('admin.post'), $post->id, array("target"=>"_blank",'class'=>'btn btn-primary '))  !!}
    </div>
</div>



@endsection
