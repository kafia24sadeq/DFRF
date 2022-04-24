

<style media="screen">
* {
  margin: 0;
  padding: 0;
}
</style>

<style media="screen">
.btn-file {
  position: relative;
  overflow: hidden;
  margin: 10px 0;
}
.btn-file input {
  position: absolute;
  top: 0;
  right: 0;
  margin: 0;
  padding: 0;
  font-size: 20px;
  cursor: pointer;
  opacity: 0;
  filter: alpha(opacity=0);
}
</style>


@yield('image_insert')

<!-- hidden image field -->

{{ Form::hidden('name', old('name')  , array('id'=>'image') ) }}


<!-- caption -->
<div class ="form-group">
  <fieldset class="form-group" id="caption_fieldset">
    {!!  Form::label('caption', trans('admin.caption'), array('class' => '')) !!}
    <div>
      {!!  Form::text('caption', old('caption'), array('class'=>'form-control') ) !!}
    </div>
  </fieldset>
</div>


{{--<!-- title -->--}}
<div class ="form-group">
  <fieldset class="form-group" id="title_fieldset">
    {!!  Form::label('link', trans('admin.link'), array('class' => '')) !!}
    <div class ="">
      {!!  Form::text('link' ,old('link'), array('class'=>'form-control') ) !!}
    </div>
  </fieldset>
</div>

<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">{!! trans('admin.insert').' '.trans('admin.images') !!}</button>

<div class ="form-group">
  <fieldset class="form-group" id="content_fieldset">
    {!!  Form::label('content', trans('admin.content'), array('class' => '')) !!}
    <div>
      {!!  Form::textarea('content',old('content'), array('class'=>'form-control') ) !!}
    </div>
  </fieldset>
</div>

<!-- areas -->
{{--<div class ="form-group">--}}
{{--  <fieldset class="form-group" id="areas_fieldset">--}}
{{--    {!!  Form::label('areas', trans('admin.areas'), array('class' => '')) !!}--}}
{{--    <div class ="">--}}
{{--      {!!  Form::text('areas' ,old('areas'), array('class'=>'form-control') ) !!}--}}
{{--    </div>--}}
{{--  </fieldset>--}}
{{--</div>--}}

{{--<!-- projects -->--}}
{{--<div class ="form-group">--}}
  {{--<fieldset class="form-group" id="projects_count_fieldset">--}}
    {{--{!!  Form::label('projects_count', trans('admin.projects_count'), array('class' => '')) !!}--}}
    {{--<div class ="">--}}
      {{--{!!  Form::text('projects_count' ,old('projects_count'), array('class'=>'form-control') ) !!}--}}
    {{--</div>--}}
  {{--</fieldset>--}}
{{--</div>--}}

<div class ="form-group">
  <fieldset class="form-group" id="section_fieldset">
    {!!  Form::label('section', trans('admin.section'), array('class' => '')) !!}
    <div>
      {!!  Form::select('section',  $categories  ,$model->image_categories_id ?? '', ['class' => 'form-control']) !!}
    </div>
  </fieldset>
</div>


<!-- budget -->
{{--<div class ="form-group">--}}
{{--  <fieldset class="form-group" id="budget_fieldset">--}}
{{--    {!!  Form::label('budget', trans('admin.budget'), array('class' => '')) !!}--}}
{{--    <div class ="">--}}
{{--      {!!  Form::text('budget' ,old('budget'), array('class'=>'form-control') ) !!}--}}
{{--    </div>--}}
{{--  </fieldset>--}}
{{--</div>--}}

{{--<!-- total_beneficiaries -->--}}
{{--<div class ="form-group">--}}
{{--  <fieldset class="form-group" id="total_beneficiaries_fieldset">--}}
{{--    {!!  Form::label('total_beneficiaries', trans('admin.total_beneficiaries'), array('class' => '')) !!}--}}
{{--    <div class ="">--}}
{{--      {!!  Form::text('total_beneficiaries' ,old('total_beneficiaries'), array('class'=>'form-control') ) !!}--}}
{{--    </div>--}}
{{--  </fieldset>--}}
{{--</div>--}}

<!-- status -->
<div class ="form-group">
  <fieldset class="form-group">
    {!!  Form::label('status', trans('admin.status'), array('class' => '')) !!}
    <div>
      @include('admin.includes.status')

      </div>
    </fieldset>
  </div>


@include('admin.includes.buttons')


{!! Form::close() !!}

@include('admin.includes.uploadimagemodal')


@push('scripts')
  @include('admin.jquery.ajax')
@endpush
