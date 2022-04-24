@yield('image_insert')

<!-- hidden image field -->

{{ Form::hidden('image_name', old('image_name')  , array('id'=>'image') ) }}

<!-- caption -->
<div class ="form-group">
    <fieldset class="form-group" id="caption_fieldset">
        {!!  Form::label('caption', trans('admin.caption'), array('class' => '')) !!}
        <div>
            {!!  Form::text('caption', old('caption'), array('class'=>'form-control') ) !!}
        </div>
    </fieldset>
</div>

<!-- introductory title -->
{{--<div class ="form-group">--}}
  {{--<fieldset class="form-group" id="introductory_fieldset">--}}
    {{--{!!  Form::label('introductory', trans('admin.introductory'), array('class' => '')) !!}--}}
    {{--<div>--}}
      {{--{!!  Form::text('introductory' ,  old('introductory') , array('class'=>'form-control') ) !!}--}}
    {{--</div>--}}
  {{--</fieldset>--}}
{{--</div>--}}


<!-- title -->
<div class ="form-group">
  <fieldset class="form-group" id="title_fieldset">
    {!!  Form::label('title', trans('admin.title'), array('class' => '')) !!}
    <div class ="">
      {!!  Form::text('title' ,old('title'), array('class'=>'form-control') ) !!}
    </div>
  </fieldset>
</div>







<!-- source -->
<div class ="form-group">
  <fieldset class="form-group" id="source_fieldset">
    {!!  Form::label('source',  trans('admin.source'), array('class' => '')) !!}
    <div>
      {!!  Form::text('source' , old("source") , array('class'=>'form-control') ) !!}
    </div>
  </fieldset>
</div>


{{--<div class ="form-group">--}}
{{--    <fieldset class="form-group" id="section_fieldset">--}}
{{--        {!!  Form::label('section', trans('admin.section'), array('class' => '')) !!}--}}
{{--        <div>--}}
{{--            {!!  Form::select('section',  $categorys_new  ,null, ['class' => 'form-control']) !!}--}}
{{--        </div>--}}
{{--    </fieldset>--}}
{{--</div>--}}
<div class ="form-group">
    <fieldset class="form-group" id="">
        {!!  Form::label('categories', trans('admin.category'), array('class' => '')) !!}

        <div class ="">
            {!!  Form::select('category_id',  $categorys  ,null, ['class' => 'form-control']) !!}
        </div>
    </fieldset>
</div>

@include('admin.includes.UploadTextToTinyMce')
<div class ="form-group">
    <fieldset class="form-group" id="content_fieldset">
        {!!  Form::label('contents', trans('admin.content'), array('id' => '')) !!}
        <div>
            {{--  {!!  Form::textarea('content', ['id' => "content"] ) !!}  --}}

            <textarea name="content" id="content" cols="30" rows="10">{{ $post->content ?? '' }} </textarea>

        </div>
    </fieldset>
</div>




<div class ="form-group">
  <fieldset class="form-group" id="importance_fieldset">
    {!!  Form::label('importance', trans('admin.importance'), array('class' => '')) !!}
    <div>
      {!!  Form::select('importance',
        array(
          '1'=>1,
          '2'=>2,
          '3'=>3,
        ),null, ['class' => 'form-control'] ) !!}
    </div>
  </fieldset>
</div>


{{--<div class ="form-group">--}}
{{--  <fieldset class="form-group">--}}
{{--    {!!  Form::label('comments_status', trans('admin.comments_status'), array('class' => '')) !!}--}}
{{--    <div>--}}
{{--      {!!  Form::select('comments_status',--}}
{{--        array(--}}
{{--          '1'=>  trans('admin.yes') ,--}}
{{--          '0'=>  trans('admin.no')  ,--}}

{{--        ),null, ['class' => 'form-control'] ) !!}--}}
{{--    </div>--}}
{{--  </fieldset>--}}
{{--</div>--}}


{{--editor_choice--}}
{{--<div class ="form-group">--}}
    {{--<fieldset class="form-group">--}}
        {{--{!!  Form::label('editor_choice', trans('admin.editor_choice'), array('class' => '')) !!}--}}
        {{--<div>--}}
            {{--{!!  Form::select('editor_choice',--}}
              {{--array(--}}
                {{--'0'=>  trans('admin.no')  ,--}}
                {{--'1'=>  trans('admin.yes') ,--}}

              {{--),null, ['class' => 'form-control'] ) !!}--}}

        {{--</div>--}}

    {{--</fieldset>--}}
{{--</div>--}}




<!-- date -->
<div class ="form-group" >
    <fieldset class="form-group" id="date_fieldset">
        {!!  Form::label('scheduled','تاريخ الخبر', array('class' => '')) !!}

        <div id="datetimepicker1" class='input-group date form-control' >
            {!!  Form::text('date', old('date'), array('class'=>'form-control', 'id'=>"datetimepicker") ) !!} <span class="glyphicon glyphicon-calendar"></span>
        </div>
    </fieldset>
</div>


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
<script src="/cp/js/datetimepicker-master/build/jquery.datetimepicker.full.js"></script>
<link rel="stylesheet" type="text/css" href="/cp/js/datetimepicker-master/jquery.datetimepicker.css"/>

<link rel="stylesheet" href="/css/clipboardtext.css">
<script src="/js/clipboardtext.js"></script>

<script type="text/javascript">
    $.datetimepicker.setLocale('ar');

    $(function () {
        $('#datetimepicker').datetimepicker({
        });
    });





</script>


@endpush
