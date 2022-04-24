{{--@extends('layouts.master')--}}
{{--@section('pageheading', trans("public.mail"))--}}

{{--{!! MetaTags( trans("public.mail"), "",ThemeHelper()."img/logo.png" , "" , settings("websiteName") ) !!}--}}
{{--@section('content')--}}

{{--    <style>--}}
{{--        .custom-select:focus {--}}
{{--            border-color: #248CC8 !important;--}}
{{--            outline: 0;--}}
{{--            box-shadow: unset !important;--}}
{{--        }--}}

{{--        .custom-select {--}}
{{--            border: 1px solid #248CC8 !important;--}}
{{--        }--}}
{{--    </style>--}}
{{--    <section>--}}
{{--        <div class="container" style="margin-top: 40px;">--}}
{{--            @if ($errors->any())--}}
{{--                <div class="alert alert-danger">--}}
{{--                    <ul>--}}
{{--                        @foreach ($errors->all() as $error)--}}
{{--                            <li>{{ $error }}</li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            <section>--}}

{{--                --}}{{--                <div class="container text-center">--}}
{{--                --}}{{--                    <div class="row divide-md title" style="text-align:center; margin-bottom: 70px;">--}}
{{--                --}}{{--                        <h2 class="mainTitle underlined text-center"--}}
{{--                --}}{{--                            style="font-size: 27px !important;color: black !important;">{{ trans('public.contactus') }}</h2>--}}
{{--                --}}{{--                        <div class="clearfix"></div>--}}
{{--                --}}{{--                    </div>--}}
{{--                --}}{{--                </div>--}}

{{--                <div class="container text-center" style="margin-top: 64px; box-shadow: 0px 2px 5px 0px #e0d8d8;>--}}
{{--                    <div class="--}}
{{--                     style="justify-content: center;align-items: center;flex-direction: column;padding: 29px;">--}}
{{--                    <img class="img-fluid" src="{!! ThemeHelper() !!}/img/icons/messeges.png" alt="">--}}
{{--                    <h2 style="margin-top: 16px;">تواصل معنا</h2>--}}
{{--                    <p style="margin-top:5px;">*قم بتعبئة الحقول التالية*</p>--}}

{{--                    <div class="row mt-5">--}}
{{--                        <div class="col-lg-2"></div>--}}
{{--                        <div class="col-lg-8">--}}
{{--                            {{ Form::open(array('route' => array('mails.store')  , 'id'=>'myform' , 'name'=>'myform')) }}--}}
{{--                            <div style="display: flex;">--}}
{{--                                <div class="form-group col-sm-6 fl_wrap">--}}
{{--                                    <label class="fl_label" for="name">{{ trans('public.name') }}</label>--}}
{{--                                    <input type="text" name="name" value="{{ old('name') }}" id="name"--}}
{{--                                           class="form-control fl_input"--}}
{{--                                           required>--}}
{{--                                </div>--}}
{{--                                <div class="form-group col-sm-6 fl_wrap">--}}
{{--                                    <label class="fl_label" for="email">{{ trans('public.email') }}</label>--}}
{{--                                    <input type="text" name="email" value="{{ old('email') }}" id="email"--}}
{{--                                           class="form-control fl_input" required>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <div class="d-flex">--}}
{{--                                <div class="form-group col-sm-6 fl_wrap">--}}
{{--                                    <label class="fl_label" for="source">{{ trans('public.source') }}</label>--}}
{{--                                    <input type="text" name="source" value="{{ old('source') }}" id="source"--}}
{{--                                           class="form-control fl_input" required>--}}
{{--                                </div>--}}
{{--                                <div class="form-group col-sm-6 fl_wrap">--}}
{{--                                    <label class="fl_label" for="phone">{{ trans('public.phone') }}</label>--}}
{{--                                    <input type="number" name="phone" value="{{ old('phone') }}" id="phone"--}}
{{--                                           class="form-control fl_input" required>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex">--}}
{{--                                <div class="form-group col-sm-6 fl_wrap">--}}
{{--                                    <label class="fl_label" for="governorate">{{ trans('public.govern') }}</label>--}}
{{--                                    <input type="text" name="governorate" value="{{ old('governorate') }}"--}}
{{--                                           id="governorate"--}}
{{--                                           class="form-control fl_input" required>--}}
{{--                                </div>--}}
{{--                                <div class="form-group col-sm-6 fl_wrap">--}}
{{--                                    <label class="fl_label" for="whatsapp">{{ trans('public.whatsApp') }}</label>--}}
{{--                                    <input type="number" name="whatsapp" value="{{ old('phone') }}" id="whatsapp"--}}
{{--                                           class="form-control fl_input" required>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group mt-5">--}}
{{--                                <select name="type" class="custom-select">--}}
{{--                                    <option selected>اختر أحد الخيارات</option>--}}
{{--                                    <option value="مبادرات">مبادرات</option>--}}
{{--                                    <option value="تدريب">تدريب</option>--}}
{{--                                    <option value="استشارة">استشارة</option>--}}
{{--                                    <option value="تطوع">تطوع</option>--}}
{{--                                    <option value="شراكة">شراكة</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="form-group col-sm-12 fl_wrap mt-5">--}}
{{--                                <label class="fl_label" for="message">{{ trans('public.message') }}</label>--}}
{{--                                <textarea type="text" name="message" value="{{ old('message') }}" id="message"--}}
{{--                                          class="form-control fl_input"--}}
{{--                                          required></textarea>--}}
{{--                            </div>--}}
{{--                            <div class="form-group text-center mt-5">--}}
{{--                                <button type="submit" value="save" id="save" class="btn btn-warning"--}}
{{--                                        style="color: white;background: #248CC8; border-color: #248CC8;" onclick="this.disabled=true;this.value='Sending, please wait...';this.form.submit();">{{ trans('public.send') }}</button>--}}
{{--                            </div>--}}
{{--                            <div class="form-group col-xs-12">--}}
{{--                                <div class="message">--}}
{{--                                    <div class="divide-xs"></div>--}}
{{--                                    <div class="alert"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            {{ Form::close() }}--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-2"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </section>--}}


{{--@endsection--}}

{{--@push('scripts')--}}
{{--    @include( 'jquery.ajax')--}}
{{--@endpush--}}
