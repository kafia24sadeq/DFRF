@extends('layouts.master')
@section('content')

{{--@section('breadcrumbs',  Breadcrumbs::render('pages', "اﻹعلانات" ))--}}

{!! MetaTags( "وظائف وإعلانات"." | ".settings("websiteName"), "وظائف وإعلانات", ThemeHelper()."img/logo.png", "" , settings("websiteName") ) !!}

@section('content')

    <style>
        .table-striped tbody tr:nth-of-type(even) {
            background-color: #FEEEDF !important;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: white !important;
        }
        .table{
            margin-top: 3rem;
            border: 2px solid #FEEEDF !important;
        }
        thead{
            background: #FEEEDF !important;
            color: #248CC8 !important;
        }
        .job-dead{
            padding: 3px;
            margin: 2px 0;
            font-size: 12px;
            color: #c50000 !important;
            font-weight: bold;
        }
        .hyber-link:hover{
            color: #248CC8 !important;
        }
    </style>

   <div class="container">
       <div class="row">
           <div class="col-lg-3 col-sm-12"></div>
           <div class="col-lg-6 col-sm-12">
               <div class="about-cover text-center">
                   <h1 class="page-title">وظائف وإعلانات</h1>
               </div>
           </div>
           <div class="col-lg-3 col-sm-12"></div>
       </div>

       <div class="row" style="margin-top: 70px;">
           <div class="col-lg-12">
               <h1 class="jobs" style="margin-bottom: 36px;">أخبرنا لماذ أنت مثالي لفريقنا!</h1>
               <p>
                   نحن دائماً نود أن نسمع من الذين هم متحمسون لما يفعلونه. إذا كنت تعتقد أنك يمكن أن تجلب شيئاً لفريقنا, سواء كان ذلك حماس ضخم أو تجربة عميقة قدم على أحد الوظائف أدناه ...
               </p>
           </div>
       </div>
            @php
                use Carbon\Carbon;
                $today = Carbon::today()->format('Y-m-d');

              function deadline($date){
                 return Carbon::parse($date);
             }
            @endphp
       <div class="row">
           <div class="col-lg-12">
               <table class="table table-striped">
                   <thead>
                   <tr >
                       <th scope="col">عنوان الوظيفة</th>
                       <th scope="col">الموعد النهائي</th>

                   </tr>
                   </thead>
                   <tbody>
                   @forelse($jobs as $job)
                   <tr>

                       <td>
                           <a href="/job/{{ $job->id }}" class="hyber-link" style="font-size: 20px;">
                               {{ $job->title }}
                           </a>

                           @if(deadline($job->deadline) < $today)
                           <p class="job-dead">
                               تم إنتهاء هذا الإعلان!
                           </p>
                           @endif
                       </td>
                       <td>{{ $job->deadline }}</td>

                   </tr>
                       @empty
                       <tr>
                           <td> No content available!</td>
                       </tr>
                   @endforelse
{{--                   <tr class="text-center">--}}

{{--                       <td>Jacob</td>--}}
{{--                       <td>Thornton</td>--}}

{{--                   </tr>--}}
{{--                   <tr class="text-center">--}}
{{--                       <td>Larry</td>--}}
{{--                       <td>the Bird</td>--}}

{{--                   </tr>--}}
                   </tbody>
               </table>
           </div>
       </div>
   </div>

@endsection
