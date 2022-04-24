@extends('layouts.app')
@section('content')
@section('title',  trans('admin.edit').' '.trans('admin.settings') )
@section('PageHeading',  trans('admin.edit').' '.trans('admin.settings') )

{!! Form::open(array('url' => '/admin/settings/' , 'class'=>'' , 'id'=>'myform' , 'name'=>'myform')) !!}

<!-- websiteName -->
<div class ="form-group">
  <fieldset class="form-group" id="websiteName_fieldset">
    {!!  Form::label( trans('admin.websiteName') , trans('admin.websiteName'), array('class' => '')) !!}
    <div class ="">
      {!!  Form::text('websiteName' ,$settings['websiteName'], array('class'=>'form-control') ) !!}
    </div>
  </fieldset>
</div>

<div class="panel panel-default">
  <div class="panel-heading"><a data-toggle="collapse" class="btn btn-default" data-target="#social">{!! trans("admin.social") !!}</a></div>
  <div class="panel-body">


    <div id="social" class="collapse">

      <!-- facebook -->
      <div class ="form-group">
        <fieldset class="form-group" id="facebook_fieldset">
          {!!  Form::label( trans('admin.facebook') , trans('admin.facebook'), array('class' => '')) !!}
          <div class ="">
            {!!  Form::text('facebook' ,$settings['facebook'], array('class'=>'form-control') ) !!}
          </div>
        </fieldset>
      </div>


      <!-- twitter -->
      <div class ="form-group">
        <fieldset class="form-group" id="twitter_fieldset">
          {!!  Form::label( trans('admin.twitter') , trans('admin.twitter'), array('class' => '')) !!}
          <div class ="">
            {!!  Form::text('twitter' ,$settings['twitter'], array('class'=>'form-control') ) !!}
          </div>
        </fieldset>
      </div>

      <!-- google -->
      <div class ="form-group">
        <fieldset class="form-group" id="google_fieldset">
          {!!  Form::label( trans('admin.google') , trans('admin.google'), array('class' => '')) !!}
          <div class ="">
            {!!  Form::text('google' ,$settings['google'], array('class'=>'form-control') ) !!}
          </div>
        </fieldset>
      </div>


      <!-- youtube -->
      <div class ="form-group">
        <fieldset class="form-group" id="youtube_fieldset">
          {!!  Form::label( trans('admin.youtube') , trans('admin.youtube'), array('class' => '')) !!}
          <div class ="">
            {!!  Form::text('youtube' ,$settings['youtube'], array('class'=>'form-control') ) !!}
          </div>
        </fieldset>
      </div>


      <!-- whatsapp -->
      <div class ="form-group">
        <fieldset class="form-group" id="whatsapp_fieldset">
          {!!  Form::label( trans('admin.whatsapp') , trans('admin.whatsapp'), array('class' => '')) !!}
          <div class ="">
            {!!  Form::text('whatsapp' ,$settings['whatsapp'], array('class'=>'form-control') ) !!}
          </div>
        </fieldset>
      </div>


      <!-- telegram -->
      <div class ="form-group">
        <fieldset class="form-group" id="telegram_fieldset">
          {!!  Form::label( trans('admin.telegram') , trans('admin.telegram'), array('class' => '')) !!}
          <div class ="">
            {!!  Form::text('telegram' ,$settings['telegram'], array('class'=>'form-control') ) !!}
          </div>
        </fieldset>
      </div>


      <!-- instagram -->
      <div class ="form-group">
        <fieldset class="form-group" id="instagram_fieldset">
          {!!  Form::label( trans('admin.instagram') , trans('admin.instagram'), array('class' => '')) !!}
          <div class ="">
            {!!  Form::text('instagram' ,$settings['instagram'], array('class'=>'form-control') ) !!}
          </div>
        </fieldset>
      </div>
    </div>
  </div>
</div>


<div class="panel panel-default">
  <div class="panel-heading"><a data-toggle="collapse" class="btn btn-default" data-target="#advance">{!! trans("admin.advanced_options") !!}</a></div>
  <div class="panel-body">




    <div id="advance" class="collapse">
      <!-- google analytics code -->
      <div class ="form-group">
        <fieldset class="form-group" id="analytics_fieldset" dir="ltr">
          {!!  Form::label( trans('admin.analytics') , trans('admin.analytics'), array('class' => '')) !!}
          <div class ="">
            {!!  Form::textarea('analytics' ,$settings['analytics'], array('class'=>'form-control') ) !!}
          </div>
        </fieldset>
      </div>


      <!-- google metaKeywors code -->
      <div class ="form-group">
        <fieldset class="form-group" id="metaKeywors_fieldset" dir="ltr">
          {!!  Form::label( trans('admin.metaKeywors') , trans('admin.metaKeywors'), array('class' => '')) !!}
          <div class ="">
            {!!  Form::textarea('metaKeywors' ,$settings['metaKeywors'], array('class'=>'form-control') ) !!}
          </div>
        </fieldset>
      </div>

      <!-- google metaDescription code -->
      <div class ="form-group">
        <fieldset class="form-group" id="metaDescription_fieldset" dir="ltr">
          {!!  Form::label( trans('admin.metaDescription') , trans('admin.metaDescription'), array('class' => '')) !!}
          <div class ="">
            {!!  Form::textarea('metaDescription' ,$settings['metaDescription'], array('class'=>'form-control') ) !!}
          </div>
        </fieldset>
      </div>

      <!-- google webmaster code -->
      <div class ="form-group">
        <fieldset class="form-group" id="gWebmaster_fieldset" dir="ltr">
          {!!  Form::label( trans('admin.gWebmaster') , trans('admin.gWebmaster'), array('class' => '')) !!}
          <div class ="">
            {!!  Form::textarea('gWebmaster' ,$settings['gWebmaster'], array('class'=>'form-control') ) !!}
          </div>
        </fieldset>
      </div>

      <!-- bing webmaster code -->
      <div class ="form-group">
        <fieldset class="form-group" id="bing_fieldset" dir="ltr">
          {!!  Form::label( trans('admin.bing') , trans('admin.bing'), array('class' => '')) !!}
          <div class ="">
            {!!  Form::textarea('bing' ,$settings['bing'], array('class'=>'form-control') ) !!}
          </div>
        </fieldset>
      </div>


      <!-- facebook code -->
      <div class ="form-group">
        <fieldset class="form-group" id="facebook_fieldset" dir="ltr">
          {!!  Form::label( trans('admin.facebook') , trans('admin.facebook'), array('class' => '')) !!}
          <div class ="">
            {!!  Form::textarea('facebookCode' ,$settings['facebookCode'], array('class'=>'form-control') ) !!}
          </div>
        </fieldset>
      </div>


      <!-- other code -->
      <div class ="form-group">
        <fieldset class="form-group" id="other_fieldset" dir="ltr">
          {!!  Form::label( trans('admin.other') , trans('admin.other'), array('class' => '')) !!}
          <div class ="">
            {!!  Form::textarea('other' ,$settings['other'], array('class'=>'form-control') ) !!}
          </div>
        </fieldset>
      </div>
    </div>
  </div>
</div>
@include('admin.includes.buttons')


{!! Form::close() !!}

@endsection

@push('scripts')
@include('admin.jquery.ajax')
@endpush
