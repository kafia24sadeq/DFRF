@extends('layouts.master')
@section('pageheading', trans("public.mail"))

{!! MetaTags( trans("public.mail"), "",ThemeHelper()."img/logo.png" , "" , settings("websiteName") ) !!}
@section('content')

<section id="contact" style="padding-top:200px">



    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="our_impact_header lates-header" >
        <img class="img-fluid" src="/photos/Group_603.png" alt="">
        <h3 style="margin-top: 10px;">تواصل معنا</h3>
        <img class="img-fluid" src="/photos/Group_603.png" alt="">
     </div>
<div class="container">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
   @endif

    <div class="row mt-5">
        <div class="col-lg-3"></div>
        <div class="col-lg-6" >
           {{ Form::open(array('route' => array('mails.store')  , 'id'=>'application' , 'name'=>'application')) }}
         
               <div class="form-group  fl_wrap">
                   <label class="fl_label" for="name">{{ trans('public.name') }}</label>
                   <input type="text" name="name" value="{{ old('name') }}" id="name"
                          class="form-control fl_input"
                          required>
              
           </div>
        
            <div class="form-group  fl_wrap">
            <label class="fl_label" for="email">{{ trans('public.email') }}</label>
            <input type="text" name="email" value="{{ old('email') }}" id="email"
                   class="form-control fl_input" required>
        </div> 
             
        <div class="form-group  fl_wrap">
                   <label class="fl_label" for="phone">{{ trans('public.phone') }}</label>
                   <input type="number" name="phone" value="{{ old('phone') }}" id="phone"
                          class="form-control fl_input" required>
               </div> 
          
          <div class="form-group fl_wrap ">
               <label class="fl_label" for="message">{{ trans('public.message') }}</label>
               <textarea type="text" name="message" value="{{ old('message') }}" id="message"
                         class="form-control fl_input"
                         required></textarea>
           </div> 
           <div class="form-group text-center mt-5">
               <button type="submit" value="save" id="save" class="btn btn-warning"
                       style="color: white;background:  #DE7778;; border-color:  #DE7778; width:100%" >{{ trans('public.send') }}</button>
           </div>
           <div class="form-group col-xs-12">
               <div class="message">
                   <div class="divide-xs"></div>
                   <div class="alert"></div>
               </div>
           </div>
           {{ Form::close() }}
       </div>
        <div class="col-lg-3"></div>

    </div>
</div>
    

</section>

    <style>
        .custom-select:focus {
            border-color: #248CC8 !important;
            outline: 0;
            box-shadow: unset !important;
        }

        .custom-select {
            border: 1px solid #248CC8 !important;
        }
        .form-group input ,.form-group textarea ,.form-group button{
            box-shadow: rgba(50, 50, 105, 0.15) 0px 2px 5px 0px, rgba(0, 0, 0, 0.05) 0px 1px 1px 0px;
           border-radius: 10px;
        }
        textarea {
        height: 200px !important;
     }
    </style>
   


@endsection

@push('scripts')
    @include( 'jquery.ajax')
@endpush
