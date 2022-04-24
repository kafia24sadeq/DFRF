@extends('layouts.master')
@section('pageheading', trans("public.ourwork"))

{!! MetaTags( trans("public.ourwork"), "",ThemeHelper()."img/logo.png" , "" , settings("websiteName") ) !!}
@section('content')

<section id="contact" style="padding-top:200px">


    <div class="our_impact_header lates-header" >
        <img class="img-fluid" src="/photos/Group_603.png" alt="">
        <h3 style="margin-top: 10px;"> اعمالنا</h3>
        <img class="img-fluid" src="/photos/Group_603.png" alt="">
     </div>
    

     {{-- <p>{{$works->id}}</p> --}}
    
 <div class="container" style="margin-top: 70px">
     <div class="row">
         <div class="col">
             <h3 style="margin-bottom: 50px;margin-right:23px">الانشطة التي قامت بتنفيذها مؤسسة دفاع للحقوق والحريات : </h3>
             <ul>
                @foreach ( $works as  $work)
            {{-- <p class="pro-work" style="margin-top:10px">{{ strip_tags( $work->content ?? '') }}</p> --}}
                <li style="margin-top:20px;">{{ strip_tags( $work->content ?? '') }}</li>
            @endforeach
             </ul>
         </div>
     </div>
 </div>
</section>

    <style>
    .pro-work{
        background: red
    }

    .pro-work::before{
    content: "";
    width: 10px;
    display: inline-block;
    position: absolute;
    top: 85px;
    height: 10px;
    right: 1px;
    border-radius: 50%;
    background: #000;
      
    }

    </style>
   


@endsection

@push('scripts')
    @include( 'jquery.ajax')
@endpush
