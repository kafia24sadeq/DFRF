@extends('layouts.master')

{{--@section('breadcrumbs', Breadcrumbs::render('post', $post ))--}}
{{--@section('pageheading', $post->categories->name)--}}

{!! MetaTags($post->title , excerptHelper($post->content,150,''),'') !!}

@section('content')
<section id="news_page">
      <div class="our_impact_header lates-header" >
        <img class="img-fluid" src="/photos/Group_603.png" alt="">
        <h3 style="margin-top: 10px;">الاخبار</h3>
        <img class="img-fluid" src="/photos/Group_603.png" alt="">
      </div>
     {{-- /////container --}}
     <div class="container"  style="margin-top: 110px">
        <div class="row">
            <div class="col"  >
                <img style="height:30px;width:30px " class="img-responsive"
                                        src="{!! ThemeHelper() !!}/img/schedule.png">
                <p class="card-text news-date" dir="rtl"
                style="display:inline-block; margin-top: 18px;">{{ $post->date }} </p>

                <h3 class="story-details-title"
                style=" font-family: 'TitleFont', sans-serif">{!! $post->title !!} </h3>
                {{ Html::image(PhotosDir($post->image_name) ,  '' ,array('style'=>'','class'=>'img-fluid show-image') ) }}
            </div>
            <div class="col" >
                <p >{!! $post->content  !!}</p>
                
                <link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
                <div class="pull-right social_icon hidden-xs " style="padding-top: 26px;">
                   {{-- <h3 style="color: #717070;margin-right: 26px;margin-bottom:30px">تابعنا</h3> --}}
                   <p class="share"  style="color: #717070;margin-right: 26px;margin-bottom:30px">شارك هذا الخبر :</p>
                   <a class="fa_Facebook" target="_blank"href="https://ar-ar.facebook.com/DFRFye/"><i class="fa-brands fa-facebook-f"></i></a>
                   <a class="fa_Youtube" target="_blank" href="#"><i class="fa-brands fa-instagram"></i></a>
                   <a class="fa_Twitter" target="_blank" href="#"><i class="fa-brands fa-twitter"></i></a>
                   <a class="fa_Telegram" target="_blank" href="#"><i class="fa-brands fa-youtube"></i></a>
               </div>
            </div>
        
        </div>
     </div>
</section>
<section id="other-news">
    <div class="our_impact_header lates-header" >
        <img class="img-fluid" src="/photos/Group_603.png" alt="">
        <h3 style="margin-top: 10px;">اخر الاخبار</h3>
        <img class="img-fluid" src="/photos/Group_603.png" alt="">
      </div>

      <div class="container" >
       <div class="latest-content" >
         @foreach ($more as  $last )
       
        <div class="card card-lates" style="width:20rem;height:260px">
            {{ Html::image(PhotosDir($last->image_name) ,  '' ,array('style'=>'width: 100%;height:100%;position: relative;','class'=>'img-fluid ') ) }}
            <div class="row content"  style="margin-top: -93px;padding-right: 33px;
            " >
            <div style="display:flex">
                <img style="height:20px;width:20px;border-radius: 0!important; " class="img-responsive"
                    src="{!! ThemeHelper() !!}/img/schedule.png">
                    <p class="card-text news-date" dir="rtl"
                     style="margin-top: -1px;">{{ $post->date }} </p>
            </div>
              
                    <br/>
                    <p  style="font-family: dubai;font-size: 17px;color:#fff;margin-right: -2px;">{!! strip_tags(str_limit( $last->title,40,'...')) !!}</p>
                    <a href="/news/{{   $last->id}}" class="hyber-link news-readmore" >
                        <small style="color: #DE7778;font-size: 117%;">قراءة المزيد</small><img style="height: 15px; transform: rotate(180deg);margin-top: 5px;
                            margin-right: 10px; border-radius:0" 
                             src="{!! ThemeHelper() !!}/img/read.png">
                    </a>
            </div>
               
          </div>
          
        @endforeach 
      
    </div> 
  
    </div>
    <div style="display: flex;" class="SeeMor">
        <a href="/news" class="text-center">
           <p style="display: inline;color:#717070">رؤية المزيد</p>
           <img style="height: 15px;border-radius:0;transform: rotate(179deg);margin-top: 6px;" 
            src="{!! ThemeHelper() !!}/img/Group_598.png">
        </a>
    </div>
   
</section>
    

@endsection

