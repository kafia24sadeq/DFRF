@extends('layouts.master')

{!! MetaTags( "الخدمات"." | ".settings("websiteName"), "الخدمات", ThemeHelper()."img/logo.png", "" , settings("websiteName") ) !!}

@section('content')

<section id="about" >
    <div class="container">
        <div class="row">
            <div class="col-lg-6" style="display: flex; align-items: center; text-align: right; margin-top: 24px;">
                <img src="{!! themehelper() !!}img/icons/about1.png" style="    width: 173px;    " alt="">
                <p class="smoke " id="homeabout">تمويل المستشفيات والصيدليات والمنشئات الصحيه والمنظمات الدوليه والإنسانية بكافه اختباجاتها</p>
            </div>
            <div class="col-lg-6" style="display: flex; align-items: center; text-align: right;margin-top: 24px;">
                    <img src="{!! themehelper() !!}img/icons/about2.png"style="    width: 173px;    " alt="">
                    <p class="smoke " id="homeabout">تمويل المستشفيات والصيدليات والمنشئات الصحيه والمنظمات الدوليه والإنسانية بكافه اختباجاتها</p>
            </div>
        </div>
        <div class="row" >
                <div class="col-lg-6" style="display: flex; align-items: center; text-align: right;margin-top: 24px;">
                        <img src="{!! themehelper() !!}img/icons/about3.png" style="    width: 173px;    " alt="">
                        <p class="smoke" id="homeabout">تمويل المستشفيات والصيدليات والمنشئات الصحيه والمنظمات الدوليه والإنسانية بكافه اختباجاتها</p>
                </div>
                <div class="col-lg-6" style="display: flex; align-items: center; text-align: right;margin-top: 24px;">
                        <img src="{!! themehelper() !!}img/icons/about4.png" style="    width: 173px;    " alt="">
                        <p class="smoke" id="homeabout">تمويل المستشفيات والصيدليات والمنشئات الصحيه والمنظمات الدوليه والإنسانية بكافه اختباجاتها</p>
                </div>
        </div>
    
        </div>
    </div>
</section>

@endsection