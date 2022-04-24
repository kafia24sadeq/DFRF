@extends('layouts.master')

{!! MetaTags( settings("websiteName"), excerptHelper(settings("metaDescription"),150,''),ThemeHelper()."img/logo.png" ,
settings("metaKeywors") , settings("websiteName") ) !!}


@section('content')
    <section id="about">
        <div class="container">
            <div class="row" style="height:600px">
                <div class="col">
                    <div class="card" style="padding: 20px;">
                       {{-- content --}}
                        <div class="row">
                            <div class="col-lg-8 box-right"  >
                                <div class="about-right">
                                   <p class="about-content">{!! isset($about->content)? strip_tags(\Illuminate\Support\Str::limit($about->content,150,'...')) : "لايوجد محتوى حالياً" !!}
                                       تاريخ التأسيس
                                   </p>
                                   <p style="text-align: right;font-weight:bold;margin-top:-11px"> 22/8/2018 .</p>
                             
                                   <div class="about-title" >
                                       <img  src="{!! ThemeHelper() !!}img/our_vision.png" alt="">
                                       <p>{{ $vision->title }}</p>
                                   </div>
                                   <p style="margin-top:-20px">{!! strip_tags(str_limit($vision->content,120,'...')) !!}</p>

                                   <div class="about-title" >
                                       <img  src="{!! ThemeHelper() !!}img/message (2).png" alt="">
                                       <p>{{ $message->title }}</p>
                                   </div>
                                   <p style="margin-top:-20px">{!! isset($about->content)? strip_tags(\Illuminate\Support\Str::limit($message->content,400,'...')) : "لايوجد محتوى حالياً" !!}</p>
                                   <a  href="{{ '/pages/1' }}">
                                       <div class="read" style="display: flex;justify-content: left;">
                                           <p style="color: #DE7778;">إقرأ المزيد</p>
                                           <img style="height: 20px; transform: rotate(180deg);margin-top: 5px;
                                           margin-right: 10px;" class="img-responsive"
                                            src="{!! ThemeHelper() !!}/img/read.png">
                                       </div>
                                   
                                   </a>
                                   
                                   
                                </div>
                               
                       

                           </div>

                           <div class="col-lg-4 hide">
                            {{-- <div class="about-left ">
                                <div class="left-title">
                                      <div class="circle"></div>
                                      <div  style="color:#1F3669;font-size:30px;font-weight: bold; ">من نحن </div>
                                      <div class="circle"></div>
                                </div>
                            </div> --}}
                        </div>

                        </div>

                       {{-- End content --}}
                      </div>
                      <div class="left-card">
                       <div class="about-left ">
                            <div class="left-title">
                                  <div class="circle"></div>
                                  <div  style="color:#1F3669;font-size:30px;font-weight: bold; ">من نحن </div>
                                  <div class="circle"></div>
                            </div>
                        </div> 
                        <div class="left-box">
                            <img style="height:200px;width:200px " class="img-responsive"
                                    src="{!! ThemeHelper() !!}/img/icons/logo.png">
                        </div>
                      
                      </div>
                </div>
            </div>
          </div>
    </section>
    {{-- LATEST  --}}
 
  @if (!empty($post))
    <section id="latest">
      
            <div class="our_impact_header lates-header">
               <img class="img-fluid" src="/photos/Group_604.png" alt="">
               <h3>اخر الاخبار</h3>
               <img class="img-fluid" src="/photos/Group_604.png" alt="">
            </div>
        <div class="container">
            <div class="latest-content" style="display:flex">
            @foreach ($post as $element )
           
            <div class="card card-lates" style="width:12rem;height:328px" id="carlates">
                <img src="/photos/{{ $element->image_name }}" style="width: 100%;height:100%;position: relative;" />
              

             <div style="position: 
             absolute;margin-top:-117px;font-family:dubai;
             padding-right:20px; padding-top:10px;z-index: 100;margin-top:202px;">

                <p style="" class="pro" >{!! strip_tags(str_limit($element->title,85,'...')) !!}</p>
                <a href="/news/{{  $element->id}}" class="hyber-link news-readmore" style="margin-right: 201px;" >
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
        
        
        @push('scripts')
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
            <script>
                $(document).ready(function()
                {
                    $(".card-lates:first").addClass("card-active");
                    $(".card-lates:first.news-readmore").css("display","inline!important");
                    $(".card-lates").on("click",function(){
                       $(".card.card-lates").removeClass("card-active");
                       $(this).addClass("card-active");
                       });

                    

                    
                });
            </script>
              <style>
                     .card-active{
                        width:24rem !important;
                     }
                     .card-active p{
                        width:24rem !important;
                        padding-left: 034px !important;
                     }
              </style>
        @endpush

        @push('scripts')
         <script>
            // var card=document.getElementById("carlates").offsetWidth;//192
            // alert(card);

         </script>
        <script>

            </script>

        @endpush
    </section>
    @endif 
    {{-- END SECTION LATEST --}}

@if(!empty($statistics))

<section id="our_impact"> 
    <div class="container">
         <div class="our_impact_header">
            <img class="img-fluid" src="/photos/Group_604.png" alt="">
            <h3>تأثيرنا</h1>
            <img class="img-fluid" src="/photos/Group_604.png" alt="">
         </div>
    </div>
<div class="container">
    <div class="row" style="margin-top: 80px">
        <div class="col-lg-3 col-md-6 col-sm-6">
           <div class="our_impact_info">
            <h4>فوق {{$statistics->applicants_num }}</h4>
            <img src="photos/4.png">
            <p>حالات حلها</p>
           </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
           <div class="our_impact_info">
            <h4>فوق {{$statistics->trainees_num}}</h4>
            <img src="photos/3.png">
            <p>تم الإفراج عن سجناء</p>
           </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="our_impact_info">
                <h4>فوق {{$statistics->centers_num}}</h4>
                <img src="photos/2.png">
                <p>تمت حماية النساء من العنف</p>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="our_impact_info ">
               
                <h4>فوق {{$statistics->courses_no}}</h4>
                <img src="photos/1.png">
                <p>اطفال تم إنقاذها من الجوع</p>


            </div>
        </div>
    </div>
</div>
</section> 
@endif
@if(!empty($videos))
       <section id="video-section" data-aos="fade-up">
            </div> 
            @push('scripts')
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
                <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
                <script>
                   
                    $('.vide').magnificPopup({
                        type: 'iframe',
                        iframe: {
                            patterns: {
                                dailymotion: {

                                    index: 'youtube.com',
                                    id: function(url) {
                                        var m = url.match(/^.+youtube.com\/(video|hub)\/([^_]+)[^#]*(#video=([^_&]+))?/);
                                        if (m !== null) {
                                            if(m[4] !== undefined) {

                                                return m[4];
                                            }
                                            return m[2];
                                        }
                                        return null;
                                    },

                                    src: 'https://www.dailymotion.com/embed/video/%id%'

                                }
                            }
                        }


                    });
                </script>

                <script src="/OwlCarousel-master/owl-carousel/owl.carousel.js"></script>

                <script>
                    $(document).ready(function () {
                        $(".owl-partners").owlCarousel({
                            navigation: false,
                            margin: 10,
                            loop: true,
                            autoWidth: true,
                            items: 3,
                            rtl: true,
                            center: true,
                            autoPlay: true

                        });
                    });
                </script>
                <style>
                    #partners-slider {
                        direction: ltr;
                        /*background: white;*/
                    }

                    #companies-slider {
                        direction: ltr;
                    }

                    /*.owl-item.active {*/
                    /*    transform: scale(1.1, 1.2);*/
                    /*}*/


                    .owl-partners .item2 {
                        padding: 30px 0px;
                        /*height : 300px;*/
                        margin: 26px;
                        /*color: #FFF;*/
                        -webkit-border-radius: 3px;
                        -moz-border-radius: 3px;
                        border-radius: 3px;
                    }

                    .owl-partners .item2 img {
                        margin: 0 auto;
                        display: block;
                    }
                </style>

            @endpush

        </section>
    @endif

    <style>

    </style>
@push('scripts')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
@endpush
    {{--Partners SLider  --}}

    <section style=" margin-top:70px; margin-bottom: 70px" id="partner" data-aos="fade-up">
        @push('scripts')
            <script src="/OwlCarousel-master/owl-carousel/owl.carousel.js"></script>

           
            <style>
                #partners-slide {
                    direction: ltr;
                    background: white;
                    margin-top: 20px;
                }

                .owl-partner .item2 {
                    padding: 30px 0px;
                    height: 200px;
                    margin: 10px;
                    color: #FFF;
                    -webkit-border-radius: 3px;
                    -moz-border-radius: 3px;
                    border-radius: 3px;
                }

                .owl-partner .item2 img {
                    margin: 0 auto;
                    display: block;
                }
            </style>

        @endpush
    </section>

    {{--  Partners SLider  --}}

    {{--   Reports Section Start--}}

    {{-- <section id="" style="background:white; margin-top:70px;margin-bottom: 145px">

        <div class="doc-container">
            <div class="row"> --}}

                {{-- <div class="col-lg-6  col-sm-12">

                    <div class="row">
                        <div class="col-lg-2 col-sm-12">

                        </div>
                        <div class="col-lg-10 col-sm-12 doc-back"> --}}
                            {{-- <img class="img-fluid" id="doc-img"
                                 src="/photos/{{ ($document->name) ?? '' }}" alt=""> --}}
                        {{-- </div>
                    </div>
                </div> --}}

                {{-- <div class="col-lg-6 col-sm-12">
                    <div class="row">
                        <div class="col-lg-2 col-sm-12"></div>
                        <div class="col-lg-10 col-sm-12">
                            <div> --}}
                                {{-- <p class="doc-title text-white doc-main">الوثائق</p>

                                <p class="doc-content">{!! strip_tags(str_limit(($document->content) ?? '',150,'...')) !!}</p>

                                <p class="text-center"><a href="#" class="btn btn-outline-light" style="border-radius: 50px !important;"> <i
                                            class="fas fa-cloud-download-alt" ></i>تحميل </a></p>
                            </div> --}}

                            {{-- <div class="doc-all-container" >
                                <a href="/docs" class="hyber-link">
                                    <p class="doc-more">جميع الوثائق</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>

    </section>
    {{--    Reports Section end--}}




    {{--    Parallax Statistics--}}

    {{--    <div class="container">--}}



    @push('scripts')
        <script src="{!! ThemeHelper() !!}js/jquery.waypoints.min.js"></script>
        <script src="{!! ThemeHelper() !!}js/jquery.animateNumber.min.js"></script>
        <script>
            var waypoint = new Waypoint({
                element: document.getElementById('projectcounter'),
                handler: function (direction) {
                    $('.projectcounter1').animateNumber(
                        {
                            number: "{{ $project->applicants_num }}",
                        },
                        5000
                    );
                    $('.projectcounter2').animateNumber({
                            number: "{{ $project->trainees_num }}",
                        },
                        5000);
                    $('.projectcounter3').animateNumber({
                        number: "{{ $project->centers_num }}",
                    }, 5000);
                    $('.projectcounter4').animateNumber({
                            number: "{{ $project->courses_no }}",
                        },
                        5000);
                    this.destroy()
                },
                offset: 300,
            });
        </script>
    @endpush
    {{--    </div>--}}



    <!-- Start partenrs section -->

    {{-- <div class="container" style="margin-top: 70px;" id="contact">
        <div class="row"> --}}
            {{-- <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <p class="text-center footer-title">تواصل معنا</p>
                <p class="text-center footer-title2">نحن سعداء بالتواصل معك</p> --}}
                {{--                @if ( url()->current() != '/mails')--}}
                @if (session('status'))
                    {{-- <div class="alert alert-success">
                        {{ session('status') }}
                    </div> --}}
                @endif
                {{--                @include('sweetalert::alert')--}}
                <div>
                    {{-- {{ Form::open(array('route' => array('home.store')  , 'id'=>'contact' , 'name'=>'contact')) }}
                    <div style="display: flex;">
                        <div class="form-group col-sm-6 fl_wrap">
                            <label class="fl_label" for="name">{{ trans("public.name") }}</label>
                            <input type="text" name="name" value="" id="name" class="form-control fl_input" required>
                        </div>
                        <div class="form-group col-sm-6 fl_wrap">
                            <label class="fl_label" for="email">{{ trans("public.email") }}</label>
                            <input type="text" name="email" value="" id="email" class="form-control fl_input" required>
                        </div>
                    </div>
                    <div class="form-group col-sm-12 fl_wrap">
                        <label class="fl_label" for="message">{{ trans("public.message") }}</label>
                        <textarea type="text" name="message" value="" id="message" class="form-control fl_input"
                                  required></textarea>
                    </div>
                    <div class="form-group  text-center" style="margin-top: 20px">
                        <button type="submit" value="save" id="save" class="btn btn-outline-info">{{ trans('public.send') }}</button>
                    </div>
                    <div class="form-group col-xs-12">
                        <div class="message">
                            <div class="divide-xs"></div>
                            <div class="alert"></div>
                        </div>
                    </div>
                    {{ Form::close() }} --}}
                {{-- </div> --}}
                {{--                    @endif--}}
            {{-- </div> --}}
            {{-- <div class="col-lg-1"> --}}
                {{-- <div class="footer-media">
                    <ul class="navbar-nav footer-icons">
                        <li class="nav-item">
                            <a href="#"> <img class="img-fluid footer-icon" style="width: 25px !important;"
                                              src="{!! ThemeHelper() !!}/img/twitter.png" alt=""></a>
                        </li>
                        <li class="nav-item">
                            <a href="#"> <img class="img-fluid footer-icon" style="width: 25px !important;"
                                              src="{!! ThemeHelper() !!}/img/facebook.png" alt=""></a>
                        </li>
                        <li class="nav-item">
                            <a href="#"> <img class="img-fluid footer-icon" style="width: 25px !important;"
                                              src="{!! ThemeHelper() !!}/img/insta.png" alt=""></a>
                        </li>
                        <li class="nav-item">
                            <a href="#"> <img class="img-fluid footer-icon" style="width: 25px !important;"
                                              src="{!! ThemeHelper() !!}/img/linked.png" alt=""></a>
                        </li>
                        <li class="nav-item">
                            <a href="#"> <img class="img-fluid footer-icon" style="width: 25px !important;"
                                              src="{!! ThemeHelper() !!}/img/w.png" alt=""></a>
                        </li>
                        <li class="nav-item">
                            <a href="#"> <img class="img-fluid footer-icon" style="width: 25px !important;"
                                              src="{!! ThemeHelper() !!}/img/email.png" alt=""></a>
                        </li>

                    </ul>
                </div> --}}
            {{-- </div>
        </div>
    </div> --}}

@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    

@endpush


