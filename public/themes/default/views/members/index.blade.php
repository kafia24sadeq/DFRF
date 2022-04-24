@extends("layouts.master")
@section('title' , 'أعضاء الفريق' )
@section('pageheading',  'أعضاء الفريق' )


{!! MetaTags('فريق العمل', "",  "" ) !!}

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-12"></div>
            <div class="col-lg-6 col-sm-12">
                <div class="about-cover text-center">
                    <p class="page-title">{{ trans('public.ourTeam') }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12"></div>
        </div>

        <div class="row">
            @foreach($members as $member)
                <div class="col-lg-4 col-sm-12 member-col">
                    <div class="person-image text-center">
                        <img class=" rounded-circle"
                             src="/photos/{{ isset($member->image_name) ? $member->image_name: "" }}" alt="">
                    </div>
                    <hr>
                    <div class="member-content">
                        <p class="person-name text-center " style="">
                            {{ $member->name }}
                        </p>
                        <p style="">
                            {!! $member->description ?? ""  !!}
                        </p>
                    </div>

                </div>
            @endforeach
        </div>
    </div>


@endsection
