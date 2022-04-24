@extends("layouts.master")
@section('title' , 'الصور' )
@section('pageheading',  'استوديو الصور' )


{!! MetaTags('Images', "",  "" ) !!}

@section("content")
{{-- 
    <div class="container" style="margin-top: 200px">
        <div class="row">
            @foreach($photos  as $photo)
                <div class="col-lg-4 col-sm-12" style="margin-top: 20px;"> --}}
{{--                    <a href="/image/{{ $photo->id }}">--}}
                        {{-- <div class="box">
                            <div class="image-box"> --}}
{{--                                {!!   Html::image(PhotosDir($photo->name ) ,  '' , array( 'class' => 'img-fluid' ,'style'=>'height:250px')) !!}--}}
                                {{-- <img data-enlargable class="img-fluid" style="cursor: zoom-in" src="../photos/{{ $photo->name }}" />
                            </div>
                        </div> --}}
{{--                    </a>--}}
                {{-- </div>
            @endforeach
        </div>
        <div class="">
            {{ $photos->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div> --}}

    {{-- <section id="other-news" style="padding-top:200px">
        <div class="our_impact_header lates-header" >
            <img class="img-fluid" src="/photos/Group_603.png" alt="">
            <h3 style="margin-top: 10px;">الصور</h3>
            <img class="img-fluid" src="/photos/Group_603.png" alt="">
          </div> --}}
{{--     
          <div class="container" >
           <div class="latest-content" >
             @foreach ($photos as  $photo )
           
            <div class="card card-lates" style="width:20rem;height:260px"> --}}
                {{-- {{ Html::image(PhotosDir( $photo->image_name) ,  '' ,array('style'=>'width: 100%;height:100%;position: relative;','class'=>'img-fluid ') ) }} --}}
                 {{-- <img src="../photos/{{ $photo->name }}" style="width: 100%;height:100%;position: relative;" class="img-fluid"/>
                 
              <div class="row content-image" > --}}
                    {{-- <div style="margin-right: 17px;display:block">
                        <br/>
                        <p  style="font-family: dubai;font-size: 17px;color:#fff;margin-right: 16px;">{!! strip_tags(str_limit(  $photo->title,40,'...')) !!}</p>
                        <a href="/news/{{    $photo->id}}" class="hyber-link news-readmore" >
                            <small style="color: #DE7778;font-size: 117%;">قراءة المزيد</small><img style="height: 15px; transform: rotate(180deg);margin-top: 5px;
                                margin-right: 10px; border-radius:0" 
                                 src="{!! ThemeHelper() !!}/img/read.png">
                        </a> --}}
                        kkkkkkkkkkkkkkkk
                        {{-- <p  style="font-family: dubai;font-size: 17px;color:#fff;margin-right: 16px;">{!! strip_tags(str_limit(  $photo->title,40,'...')) !!}</p> --}}
                        {{-- <a href="/news/{{    $photo->id}}" class="hyber-link news-readmore" >
                            <small style="color: #DE7778;font-size: 117%;">قراءة المزيد</small><img style="height: 15px; transform: rotate(180deg);margin-top: 5px;
                                margin-right: 10px; border-radius:0" 
                                 src="{!! ThemeHelper() !!}/img/read.png">
                        </a>  --}}
{{--                        
                </div>  
                
                   
              </div> --}}
              
            {{-- @endforeach  --}}
          
        {{-- </div> 
      
        </div>
        <div class="">
            {{ $photos->links('vendor.pagination.bootstrap-4') }}
        </div>
    </section> --}}

    <section id="photo">

        <div class="container" style="margin-top: 130px">
            
            <div class="our_impact_header lates-header" >
                <img class="img-fluid" src="/photos/Group_603.png" alt="">
                <h3 style="margin-top: 10px;">الصور</h3>
                <img class="img-fluid" src="/photos/Group_603.png" alt="">
              </div>
        
                <div class="row" style="margin-top:100px">
                    @foreach($photos  as $photo)
                        <div class="col-lg-4 col-sm-12 col-md-6" style="margin-bottom: 50px;">
                            {{-- <a href="https://www.youtube.com/watch?v={{$photo->videoID }}" class="vide"> --}}
                                {{-- <div class="box" style="border-radius: 20px; !important;">
                                     <div class="image-box" style="border-radius: 20px; !important;">
                                        <img width="100%; margin-top: 15px;" src="{{ $photo->image_name }}"
                                             alt=""  style=" border-radius: 20px; !important; box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;">
                                        
                                             <img src="{!! ThemeHelper() !!}img/video.png" class="videos" style=" " alt=""/>
        
                                             <div class="content-video">
                                                <img  class="img-responsive"
                                                src="{!! ThemeHelper() !!}/img/schedule.png" style="width:20px;height:20px;margin-right: -253px;
                                                " dir="ltr">
                                              <p class="card-text news-date" dir="rtl"
                                              style="display:inline-block; margin-top: 18px;">{{$photo->date }} </p>
                                                <p class="hyber-link " style="margin-top: 8px; color: #000000 !important; margin-right: -55px;"> {!! strip_tags(str_limit(  $photo->title,30,'...')) !!}</p>
                                             </div>
               
                                    </div> 
                                </div> --}}
                            {{-- </a>  --}}
                            <div class="box" style="border-radius: 20px; !important;">
                                <div class="image-box" style="border-radius: 20px; !important;">
                            <img src="../photos/{{ $photo->name }}" style="width: 100%;height:100%;position: relative;" class="img-fluid"/>
                                </div>

                        <p  style="font-family: dubai;font-size: 17px;color:#fff;margin-right: 16px;">{!! strip_tags(str_limit(  $photo->title,40,'...')) !!}</p>
                        {{-- <a href="/news/{{    $photo->id}}" class="hyber-link news-readmore" >
                            <small style="color: #DE7778;font-size: 117%;">قراءة المزيد</small><img style="height: 15px; transform: rotate(180deg);margin-top: 5px;
                                margin-right: 10px; border-radius:0" 
                                 src="{!! ThemeHelper() !!}/img/read.png">
                        </a> --}}
                            </div>
                        </div>  
                    @endforeach
                </div>
        
        
                <div class="" style="clear:both; display: flex;justify-content: center" >
                    {{ $photos->links('vendor.pagination.bootstrap-4') }}
                </div>
        
        
            </div>
        
    
    </section>





@endsection




















