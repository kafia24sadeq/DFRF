@extends('layouts.app')


@section('content')
  @section('title',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.articles') )
  @section('PageHeading',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.articles') )
  {{--@section('breadcrumbs', Breadcrumbs::render('articles.index'))--}}

    <div class="panel panel-default">
      <div class="panel-body">
          {!! link_to_route('articles.create',  trans('admin.add').' '. trans('admin.article'),array(), array('class'=>'btn btn-primary ')) !!}

          {!! link_to_route('categories.create',  trans('admin.add').' '. trans('admin.section'),array(), array('class'=>'btn btn-primary ')) !!}
      </div>
    </div>

  {{ $articles->links('vendor.pagination.bootstrap-4') }}

  <table class ="table table-striped table-bordered table-hover table-sm">
    <thead>
      <tr>
        <th>{!!  trans('admin.ID')  !!}</th>
        <th>{!!  trans('admin.title')  !!}</th>
        <th>{!!  trans('admin.section')  !!}</th>
        <th>{!!  trans('admin.image')  !!}</th>
        <th>{!!  trans('admin.user')  !!}</th>
        <th>{!!  trans('admin.created_at')  !!}</th>
        <th>{!! trans('admin.date') !!}</th>
        <th>{!! trans('admin.status') !!}</th>

      </tr>
    </thead>
    <tbody>


      @foreach($articles as $article)
        <tr>
          <td>{!! $article->id !!}</td>
          <td>{!! $article->title !!}<br >{!! $article->writers->name !!}</td>
          <td>{!! $article->categories->name !!}</td>
          <td>  <img src= "{!! PhotosDir($article->getImage(), true, [50,50]) !!}" width=""  alt="" /></td>
          <td>{!! $article->publisher->name !!}</td>
          <td>{!! link_to_route('articles.edit',  trans('admin.edit').' '. trans('admin.article'), $article->id, array('class'=>'btn btn-default btn-xs'))  !!}
            {{-- {!! link_to_route('articles.show',  trans('admin.details').' '. trans('admin.article'), $article->id, array('class'=>'btn btn-primary btn-xs'))  !!} --}}
          </td>
          <td>{!! Mydate($article->created_at) !!}</td>
          <td>{!! BlockedOrNot($article->status) !!}

          </tr>
        @endforeach
      </tbody>
    </table>

    {{ $articles->links('vendor.pagination.bootstrap-4') }}



  @endsection
