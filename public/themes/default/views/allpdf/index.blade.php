@extends('layouts.master')
{{--@section('breadcrumbs', Breadcrumbs::render('post', $post ))--}}
{{--@section('pageheading', $post->categories->name)--}}



{!! MetaTags( settings('websiteName'), excerptHelper(settings("metaDescription"),150,''),ThemeHelper()."img/logo.png" , settings("metaKeywors") , settings("websiteName") ) !!}
@section('content')
    @foreach($pdfs as $pdf)
        <div class="col-xs-4">
        <h3>{!! $pdf->content !!}</h3>
        <a href="{!! $pdf->link !!}" target="_blank">{{ Html::image(PhotosDir($pdf->name, true, [300,400]) ,  $pdf->name  , array('width'=>'300','height'=>'400', 'class' => '')) }}
        </a>
        </div>
    @endforeach
@endsection