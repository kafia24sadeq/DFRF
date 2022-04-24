@extends('layouts.app')

@section('content')

<div class="container" >
    <div class="row">
{{--        <div class="col-lg-3"></div>--}}
        <div class="col-lg-4">
            <div class="row" >
{{--                <div >--}}
                <div style="text-align: center"><h3>تفاصيل المتقدم</h3></div>
                <hr>
                   <div class="flex-item" style="margin-top: 40px">{{ trans('admin.name') }} : <p class="space-right"> {{ $app->name }} </p></div>
                <hr>
                   <div class="flex-item"> {{ trans('admin.email') }} :
                       <p class="space-right"> {{ $app->email }}</p>

                   </div>
                <hr>
                <div class="flex-item"> {{ trans('public.source') }} : <p class="space-right"> {!! $app->source !!}</p></div>
                <hr>
                <div class="flex-item"> {{ trans('public.phone') }} : <p class="space-right"> {!! $app->phone !!} </p></div>
                <hr>
                <div class="flex-item"> {{ trans('admin.whatsapp') }} : <p class="space-right"> {!! $app->whatsapp !!} </p></div>
                <hr>
                <div class="flex-item"> {{ trans('admin.type') }} : <p class="space-right"> {!! $app->type !!} </p></div>
                <hr>
                <div class="d-flex flex-column"> {{ trans('public.message') }} : <br>
                    <p class="space-right" style="margin-top: 10px"> {!! $app->message !!}</p></div>
                <hr>

                <hr>

                <hr>
            </div>
        </div>

    </div>
</div>

@endsection
@push('scripts')
    <style>
        .flex-item{
           display: flex;
        }
        .space-right{
            margin-right: 5px;
        }
    </style>
@endpush
