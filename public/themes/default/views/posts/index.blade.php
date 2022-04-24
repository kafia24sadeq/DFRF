@extends('layouts.master')

{!! MetaTags( " | ".settings("websiteName"), "", ThemeHelper()."img/logo.png", "" ,
settings("websiteName") ) !!}

{{--@endif--}}

@section('content')
<section id="all-news">
   
    
    <div class="our_impact_header lates-header"  >
      <img class="img-fluid" src="/photos/Group_603.png" alt="">
        <h3 style="margin-top: 10px;"> الاخبار</h3>
        <img class="img-fluid" src="/photos/Group_603.png" alt=""> 
      
      </div>
    <div class="container " style="margin-top:50px" >
        <div class="latest-content" style="display: flex;flex-wrap: wrap;"> 
              @foreach ($posts as $post )
            
              <div class="card card-lates" style="">
                {{ Html::image(PhotosDir($post->image_name) ,  '' ,array('class'=>'story-image') ) }}
                 <div class="row content"  style="margin-top: -93px;padding-right: 33px;
                 " >
                 <div style="display:flex">
                     <img style="height:20px;width:20px;border-radius: 0!important; " class="img-responsive"
                         src="{!! ThemeHelper() !!}/img/schedule.png">
                         <p class="card-text news-date" dir="rtl"
                          style="margin-top: -1px;">{{ $post->date }} </p>
                 </div>
                   
                         <br/>
                         <p  style="font-family: dubai;font-size: 17px;color:#fff;margin-right: -2px;">{!! strip_tags(str_limit( $post->title,40,'...')) !!}</p>
                         <a href="/news/{{   $post->id}}" class="hyber-link news-readmore" style="margin-right: 174px;
                            margin-top: -1px;">
                             <small style="color: #DE7778;font-size: 117%;">قراءة المزيد</small><img style="height: 15px; transform: rotate(180deg);margin-top: 5px;
                                 margin-right: 10px; border-radius:0" 
                                  src="{!! ThemeHelper() !!}/img/read.png">
                         </a>
                 </div>
                    
               </div>
               
             @endforeach 
           
         </div> 
        
         </div>
         <div class="paginate">
            {{ $posts->links('vendor.pagination.bootstrap-4') }}
</section>

   {{-- <div class="container" style="margin-top:50px;">
        <div class="row">
            <div class="col-lg-3 col-sm-12"></div>
            <div class="col-lg-6 col-sm-12">
                
            </div>
            <div class="col-lg-3 col-sm-12"></div>
        </div>
       <div class="paginate">
            {{ $posts->links('vendor.pagination.bootstrap-4') }}
        </div> 

    </div>   --}}

    {{-- <div class="container" style="margin-top: 80px"> --}}

        @forelse($posts as $post)
          {{-- <div class="row space-top-bottom"> --}}
               {{-- <div class="col-lg-4 col-sm-12 story-imgdiv" >
                    <a href="/{{ $type }}/{{ $post->id }}">  {{ Html::image(PhotosDir($post->image_name) ,  '' ,array('class'=>'story-image') ) }} </a>
                </div> --}}
                {{-- <div class="col-lg-4 col-sm-12 d-flex flex-column justify-content-center">
                    <a href="/{{ $type }}/{{ $post->id }}"> <h2 class="story-title divid-sm">{{ $post->title }}</h2></a>

                    <p class="story-content divid-sm">{{ str_limit(strip_tags($post->content),200 ,'...') }}</p>
                </div>  --}}

         {{-- </div>  --}}

         {{-- <div style="display: flex">
            
         </div> --}}

           
        @empty
            <div class="row">
                <div class="col-lg-12 col-sm-12"
                     style="display: flex; justify-content: center;align-items: center;">
                    <h2 class="text-center">{{ 'لايوجد محتوى حالياً' }}</h2>
                </div>
            </div>
        @endforelse

        
    </div>

@endsection

