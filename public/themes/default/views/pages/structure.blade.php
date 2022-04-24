@extends('layouts.master')
@section('content')
    {{--@section('breadcrumbs',  Breadcrumbs::render('pages', $page ))--}}

    {!! MetaTags( 'أهداف الصندوق', '', ThemeHelper()."img/logo.png", "" , settings("websiteName") ) !!}

    <div class="container" style="margin-top: 100px">
        <div class="row" style="justify-content: center">
            <div class="col-lg-2 text-center">
                <img style="width: 58px;" src="{!! ThemeHelper() !!}/img/icons/goals.png" alt="">
                <h5 class="text-center" style="margin-top: 16px">الهيكل التنظيمي </h5>

            </div>
        </div>
        <div class="row" style="margin-top: 70px; padding: 15px; justify-content: center">
          <div class="col-lg-12 col-sm-12 col-md-12">
              <img class="img-fluid"  src="{!! ThemeHelper() !!}/img/structure.png" alt="">
          </div>
        </div>

    </div>



@endsection
