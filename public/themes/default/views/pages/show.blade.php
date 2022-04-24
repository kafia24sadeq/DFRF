@extends('layouts.master')
@section('content')

@section('breadcrumbs',  Breadcrumbs::render('pages', $page ))

{!! MetaTags( $page->title, excerptHelper( $page->content ,150,''), ThemeHelper()."img/logo.png", "" , settings("websiteName") ) !!}

<style>


</style>
<section  id="about-page" style="">
<div class="container">
    
        <div class="our_impact_header lates-header" >
            <img class="img-fluid" src="/photos/Group_603.png" alt="">
            <h3 style="margin-top: 10px;">من نحن</h3>
            <img class="img-fluid" src="/photos/Group_603.png" alt="">
         </div>
    

  <div class="row" style="margin-top: 70px">
        <div class="col-lg-12 col-sm-12"> 
        {{-- <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-page" role="tab" aria-controls="nav-page" aria-selected="true">
                        <div class="text-center">
                            <img style="width: 24px; height: auto" src="{!! ThemeHelper() !!}img/about.png" alt="">
                            <p>{{ $page->title }}</p>
                        </div>

                    </a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-goal" role="tab" aria-controls="nav-goal" aria-selected="false">
                        <div class="text-center">
                            <img style="width: 24px; height: auto" src="{!! ThemeHelper() !!}img/goals.png" alt="">
                            <p>{{ $goal->title }}</p>
                        </div>
                    </a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-message" role="tab" aria-controls="nav-message" aria-selected="false">
                        <div class="text-center">
                            <img style="width: 24px; height: auto" src="{!! ThemeHelper() !!}img/message.png" alt="">
                            <p>{{ $message->title }}</p>
                        </div>
                    </a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-vision" role="tab" aria-controls="nav-vision" aria-selected="false">
                        <div class="text-center">
                            <img style="width: 13px; height: auto" src="{!! ThemeHelper() !!}img/vision.png" alt="">
                            <p>{{ $vision->title }}</p>
                        </div>
                    </a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-value" role="tab" aria-controls="nav-value" aria-selected="false">
                        <div class="text-center">
                            <img style="width: 24px; height: auto" src="{!! ThemeHelper() !!}img/value.png" alt="">
                            <p>{{ $value->title }}</p>
                        </div>
                    </a>

                </div>
            </nav>  --}}
          {{-- <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-page" role="tabpanel" aria-labelledby="nav-page-tab">{{ strip_tags($page->content ?? '') }}</div>
                <div class="tab-pane fade" id="nav-goal" role="tabpanel" aria-labelledby="nav-goal-tab"> {{ strip_tags($goal->content ?? '') }} </div>
                <div class="tab-pane fade" id="nav-message" role="tabpanel" aria-labelledby="nav-message-tab">{{ strip_tags($message->content ?? '') }}</div>
                <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">{{ strip_tags($vision->content ?? '') }}</div>
                <div class="tab-pane fade" id="nav-value" role="tabpanel" aria-labelledby="nav-value-tab">{{ strip_tags($value->content ?? '') }}</div>
            </div>  --}}
     </div>
    </div>
</div> 
<div class="container">
    <div class="row">
        <div class="col-lg-8" >
            <p>  {!! $page->content !!}</p>
        </div>
        <div class="col-lg-4">
              <div class="about-box-left" >
                <img style="height:200px;width:200px " class="img-responsive"
                src="{!! ThemeHelper() !!}/img/icons/logo.png">
              </div>
        </div>
        
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
              {{-- الرؤية --}}
              <div class="about-title" >
                <img  src="{!! ThemeHelper() !!}img/our_vision.png" alt="">
                <p>{{ $vision->title }}</p>
            </div>
            <p style="margin-top:-20px">{{ strip_tags($vision->content ?? '') }}</p>

            {{-- الرسالة --}}
            <div class="about-title" >
                <img  src="{!! ThemeHelper() !!}img/message (2).png" alt="">
                <p>{{ $message->title }}</p>
            </div>
            <p style="margin-top:-20px">{{ strip_tags($message->content ?? '') }}</p>
            
        {{--  اهدافنا عامة--}}

        <div class="about-title" >
            <img  src="{!! ThemeHelper() !!}img/OUR GENERAL GOALS.png" alt="">
            <p>{!! $ourgeneralgals ->title !!}</p>
        </div>
        {{-- <p style="margin-top:-20px">{!! strip_tags($ourgeneralgals->content ?? '') !!} </p> --}}
         <p  style="margin-top:-20px">{!! $ourgeneralgals->content !!}</p>

        {{-- اهدافنا خاصة --}}
            <div class="about-title" >
            <img  src="{!! ThemeHelper() !!}img/OUR SPECIAL GOALS.png" alt="" style="margin-top:-16px">
            <p>{!! $ourspecialgoals ->title !!}</p>
        </div>
        <p style="margin-top:-20px">{!! $ourspecialgoals ->content !!}</p> 

        {{-- التقيم --}}
     <div class="about-title" >
            <img  src="{!! ThemeHelper() !!}img/OUR_VALU.png" alt="" style="margin-top:-10px">
            <p>{{ $value->title }}</p>
        </div>
        <p style="margin-top:-20px">{{ strip_tags($value->content?? '') }}</p>

        </div>
    </div>
</div>

</section>
@endsection
