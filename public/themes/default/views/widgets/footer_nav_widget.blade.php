{{-- <footer id="" style="background-color:white; margin-top:100px;margin-bottom:30px"> --}}

     {{-- <div class="container">

        @php
            $email = \Systems\Page::find(6);
            $phone = \Systems\Page::find(7);
            $address1 = \Systems\Page::find(8);
            $address2 = \Systems\Page::find(9);
            $workHours = \Systems\Page::find(10);
        @endphp --}}
{{-- 
        <div class="row" style="padding-top: 15px">
            <div class="col-lg-5 mt-4 col-sm-12 text-right email" dir="ltr">
                <div class="mapouter"> --}}
                    {{-- <div class="gmap_canvas">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2404.023616676409!2d45.03808123114276!3d12.777055997813699!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3df5f7f49d0b9ca5%3A0x473041aa0b11b117!2sAlf%20Ba%20Civilian%20%26%20Coexistence%20foundation!5e1!3m2!1sen!2s!4v1602416907060!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        <a href="https://www.embedgooglemap.net/blog/nordvpn-coupon-code/"></a></div> --}}
                    {{-- <style>.mapouter {
                            position: relative;
                            text-align: right;
                            height: 300px;
                            width: 100%;
                        }

                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 300px;
                            width: 100%;
                        }</style>
                </div>
            </div>
            <div class="col-lg-2 col-sm-12 mt-4 text-center">
                <img style=" width:150px;height: auto; " class="img-responsive"
                     src="{!! ThemeHelper() !!}/img/icons/logo.png">
            </div>
            <div class="col-lg-5 col-sm-12 mt-4 address">
                <p><a href="mailto:alf.ba.c.c@gmail.com" class="hyber-link">{!! $email->content ?? '' !!}</a></p>
                <p class="phone-contact" dir="rtl">{{ strip_tags($phone->content) ?? '' }}</p>
                <p>{!!  $address1->content  ?? '' !!} </p>
                <p>{!! $address2->content ?? '' !!}</p>
                <p>{!! $workHours->content ?? '' !!}</p>
            </div>
        </div>

        <div class="row" style="margin-top: 70px">
            <div class="col-lg-2 col-sm-12 logo-div">
                <a href="https://you-it.com/" target="_blank"> <img src="{!! ThemeHelper() !!}/img/logouIt2.png"
                                                                    class="img-fluid logo" alt=""></a>
                <p style="font-size: 1.2em; color: #616161;">تصميم وتطوير</p>
            </div>
            <div class="col-lg-7 col-sm-12"></div>
            <div class="col-lg-3 col-sm-12"
                 style="    display: flex;justify-content: center;align-items: center;color: #616161;">
                {{ trans('public.copyRights') }} &#9400; {{ date('Y') }}
            </div>
        </div>
    </div>

</footer>

<style>
    .footer-title {
        font-size: 2em;
    }

    .footer-title2 {
        font-size: 2em;
        padding-bottom: 40px;
    }

    @media (min-width: 992px) {
        .footer-icons {
            flex-direction: column;
            text-align: left;
        }
    }

    p {
        color: #616161 !important;
    }

    @media (max-width: 991px) {
        .footer-icons {
            flex-direction: row;
            text-align: left;
            justify-content: space-evenly;
        }
        .phone-contact{
            text-align: center !important;
        }
    }

    .footer-icon {
        padding-top: 5px;
        padding-bottom: 5px;
    }

    .form-control {
        display: block;
        width: 100%;
        height: calc(1.5em + .75rem + 2px);
        padding: .375rem .75rem;
        font-size: 1rem;
        color: #248CC8 !important;
        font-weight: 400;
        line-height: 1.5;
        background-color: unset;
        background-clip: padding-box;
        border-top: unset !important;
        border-left: unset !important;
        border-right: unset !important;
        border-bottom: 1px solid #248CC8 !important;
        border-radius: unset !important;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .form-control:focus {
        box-shadow: unset !important;
    }

    .form-group > .btn-outline-info {
        color: #248CC8 !important;;
        border: 1px solid #248CC8 !important;;
    }

    .form-group > .btn-outline-info:hover {
        color: white !important;;

    }

    @media (max-width: 991px) {
        .address {
            text-align: center !important;
            margin-top: 26px;
        }

        .email {
            text-align: center !important;
            margin-top: 26px;
        }

        .logo {
            width: 20%;
        }

        .logo-div {
            text-align: center !important;
        }
    }

    @media (min-width: 992px) {
        .logo {
            width: 70%;
        }

        .nav-item {
            padding-top: 8px;
        }

    }


</style> --}}

@push('scripts')
   @include( 'jquery.ajax')
@endpush


<footer>

   <div class="container" >
    {{-- <div style="display: flex;justify-content: flex-end;" >
        <img style="width: 44px;position: relative; " class="img-responsive scrolltotop"
        src="{!! ThemeHelper() !!}/img/icons/up.png">
    </div> --}}
    {{-- <div class="row">
        <div class="col-sm-8" ></div>
        <div class="col-sm-4 " >
            <img style="width: 44px;position: relative; " class="img-responsive scrolltotop"
            src="{!! ThemeHelper() !!}/img/icons/up.png"></div>
    </div>  --}}
{{-- /////////////////////////////// --}}
    {{-- <div class="row">
        <div class="col-sm-8" ></div>
        <div class="col-sm-4 " >
        <div style="display: flex;justify-content: flex-end;" >
            <img style="height: 113px; margin-right:100px !important; " class="img-responsive"
            src="{!! ThemeHelper() !!}/img/icons/logo.png" >
        </div>
        </div>
    </div> --}}
    
    {{-- ///////////////////// --}}
    <div class="row">
        <div class="col-sm " >
           
        </div>
        <div class="col-sm  " style="text-align: left">
            <img style="width: 44px;position: relative;margin-left: -60px !important; " class="img-responsive scrolltotop"
            src="{!! ThemeHelper() !!}/img/icons/up.png">
        </div>
    </div>
    <div class="row">
        <div class="col " style="text-align: left" >
           
        </div>
        <div class="col-10" style="text-align: left;" >
                <img style="height:  140px; margin-left:46px " class="img-responsive  footer-logo"
                src="{!! ThemeHelper() !!}/img/icons/logo.png" >
                <button type="button" class="btn btn-web footer-btn" style="margin-left: 26px;" >أبلغ عن</button>
        </div>
    </div>
    <div class="row">
        
        <div class="col-sm col-md" >
            <div class="pull-right social_icon hidden-xs " style="padding-top: 53px;">
                <h3 style="color: #717070;margin-right: 26px;margin-bottom:30px">تابعنا</h3>
                <a class="fa_Facebook" target="_blank"href="https://ar-ar.facebook.com/DFRFye/"><i class="fa-brands fa-facebook-f"></i></a>
                <a class="fa_Youtube" target="_blank" href="#"><i class="fa-brands fa-instagram"></i></a>
                <a class="fa_Twitter" target="_blank" href="#"><i class="fa-brands fa-twitter"></i></a>
                <a class="fa_Telegram" target="_blank" href="#"><i class="fa-brands fa-youtube"></i></a>
        </div>
        </div>
        <div class="col-sm col-md" >
            <div class="links-footer" style="display: flex;justify-content: space-around;" >
           <div >
            <p><a href="{{ '/' }}" style="color: #717070 !important">الصفحة الرئيسية</a></p>
            <p><a   href="{{ '/pages/1' }}" style="color: #717070 !important">من نحن</a></p>
            <p><a href="#" style="color: #717070 !important">اخر الاخبار</a></p>
            <p><a href="#" style="color: #717070 !important">القضايا</a></p>
           </div>
           <div class="one">
            <p><a href="/ourworks" style="color: #717070 !important">المعرض</a></p>
            <p><a href="/ourworks" style="color: #717070 !important">اعمالنا</a></p>
            <p><a href="{{'/mails/create' }}" style="color: #717070 !important">{!! trans("public.contactus")!!}</a></p>
            <p><a href="#" style="color: #717070 !important">EN</a></p>
           </div>
           <div class="three" >
            <p><a href="#" style="color: #717070 !important;margin-top: -39px;">سياسة الخصوصية</a></p>
            <p><a href="#" style="color: #717070 !important">اتفاقية المستخدم</a></p>
            <p><a href="#" style="color: #717070 !important">FAQ</a></p>
           </div>

        </div>
    </div>
   </div>
{{-- <div class="container">
       <div class="row">
        <div class="col-sm-8">col-sm-8</div>
        <div class="col-sm-4">col-sm-4</div>
       </div> --}}

        {{-- <div class="footer-right">
            <img style="width: 44px;position: relative; " class="img-responsive scrolltotop"
             src="{!! ThemeHelper() !!}/img/icons/up.png">
                 <div class="row">
           
                <div>
                <button type="button" class="btn btn-web" style="" >التقرير</button>
                <img style="height: 113px; margin-right:100px !important; " class="img-responsive"
                src="{!! ThemeHelper() !!}/img/icons/logo.png" >
            </div>
         </div>
           
      
    </div> --}}
    {{-- <div class="footer-left">
        <img style="width: 44px;position: relative;left:-1095px;" class="img-responsive scrolltotop"
        src="{!! ThemeHelper() !!}/img/icons/up.png">
        <div class="row">
           
            <div style="position: relative;left:-778px; display:inline" >
            <img style="height:131px;margin-left:25px " class="img-responsive"
                src="{!! ThemeHelper() !!}/img/icons/logo.png" >
            <button type="button" class="btn btn-web" style="" >أبلغ عن</button>
           
        </div>
     </div>
    </div>
</div> --}}

{{-- 
<div class="container">
    <div class="row"> --}}

        {{-- <div class="col" style="text-align: right" class="footer-left"> --}}
            {{-- <h4 class="stay-info">stay informed</h4>
             <div class="footer-subscribe"
                <button type="button" class="btn btn-web" style="margin-left: -56px;margin-top: -4px;" >subscribe</button>
                <input type="text"   placeholder="Enter your email">
             </div> --}}
             {{-- <link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
             <div class="pull-right social_icon hidden-xs " style="padding-top: 53px;">
                <h3 style="color: #717070;margin-right: 26px;margin-bottom:30px">تابعنا</h3>
                <a class="fa_Facebook" target="_blank"href="https://ar-ar.facebook.com/DFRFye/"><i class="fa-brands fa-facebook-f"></i></a>
                <a class="fa_Youtube" target="_blank" href="#"><i class="fa-brands fa-instagram"></i></a>
                <a class="fa_Twitter" target="_blank" href="#"><i class="fa-brands fa-twitter"></i></a>
                <a class="fa_Telegram" target="_blank" href="#"><i class="fa-brands fa-youtube"></i></a> --}}
                
{{--                
                <a class="fa_Facebook" target="_blank" href="https://www.facebook.com/{!! settings('facebook') !!}"><i class="fa-brands fa-facebook-f"></i></a>
                <a class="fa_Youtube" target="_blank" href="https://icon-instagram.com/{!! settings('icon-instagram') !!}"><i class="fa-brands fa-instagram"></i></a>
                <a class="fa_Twitter" target="_blank" href="https://twitter.com/{!! settings('twitter') !!}"><i class="fa-brands fa-twitter"></i></a>
                <a class="fa_Telegram" target="_blank" href="https://telegram.me/{!! settings('telegram') !!}"><i class="fa-brands fa-youtube"></i></a> --}}
              
            {{-- </div>
         </div> --}}

        











         {{-- RIGHT --}}
        {{-- <div class="col">
           <div class="row justify-content-md-center">
               <div class="col-md-auto ">
                <p><a href="{{ '/' }}" style="color: #717070 !important">الصفحة الرئيسية</a></p>
                <p><a   href="{{ '/pages/1' }}" style="color: #717070 !important">من نحن</a></p>
                
                <p><a href="#" style="color: #717070 !important">اخر الاخبار</a></p>
                <p><a href="#" style="color: #717070 !important">القضايا</a></p>
               </div>
               <div class="col-md-auto one">
                <p><a href="/ourworks" style="color: #717070 !important">المعرض</a></p>
                <p><a href="/ourworks" style="color: #717070 !important">اعمالنا</a></p>
                <p><a href="{{'/mails/create' }}" style="color: #717070 !important">{!! trans("public.contactus")!!}</a></p>
                <p><a href="#" style="color: #717070 !important">EN</a></p>
            </div>
            <div class="col-md-auto col one">
            <p><a href="#" style="color: #717070 !important;margin-top: -39px;">سياسة الخصوصية</a></p>
            <p><a href="#" style="color: #717070 !important">اتفاقية المستخدم</a></p>
            <p><a href="#" style="color: #717070 !important">FAQ</a></p>
            </div>
           </div>
         </div> --}}
 {{-- LEFT --}}
{{-- 
    </div>
</div> --}}

</footer>


<div class="container-fluid footer-img">
 <div style="margin-top: 36px;text-align: center;margin-bottom: 20px; " class="you-img">
    <img   class="img-responsive" style="width: 100px;"
    src="{!! ThemeHelper() !!}/img/icons/you_white.png" >
    <p style="color: #fff">POWERED BY YOU IT</p>
 </div>
</div>

<div class="copy " style="margin-bottom: 10px !important">
Defense for Rights and  freedoms Foundation @ All  rights reserved 2022
</div>

{{-- @push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
      // Click event to scroll to top
       $('.scrolltotop').click(function(){ 
       $('html, body').animate({scrollTop : 0}, 1500, 'easeInOutExpo');
       return true;
        });
        });
        
    </script>
@endpush  --}}
@push('scripts')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
$('.scrolltotop').click(function(){
   $('html, body').animate({scrollTop : 0},800);
   return false;
});
});
</script>
@endpush
@push('scripts')
    <script>
    var foot=document.querySelector('footer');
    var navbar=document.querySelector('.navbar');
   window.addEventListener('scroll', function() {
    //   alert(window.scrollY);///value
    //   alert(foot.offsetTop);//// 2968

    if(window.scrollY>=foot.offsetTop-200)
    {
        navbar.style.display='none';
    }
    else{
        navbar.style.display='';
    }

   });

   
    </script>
    <style>
        .social_icon i{
    color: #1F3669;
    font-size: 30px;
    margin-right: 20px;
        }
       footer p{
            margin-top: 25px;
            margin-left: 33px;
        }
    </style>
@endpush
