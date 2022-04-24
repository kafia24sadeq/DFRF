






<!-- article_writer  -->
<div class ="form-group">
    <div>
      {!!  Form::hidden('article_writer' ,  old('article_writer') , array('id'=>"article_writer", 'class'=>'form-control') ) !!}
    </div>
</div>



<!-- writer  -->
<div class ="form-group">
  <fieldset class="form-group" id="writer_fieldset">
    {!!  Form::label('writer', trans('admin.writer'), array('class' => '')) !!}
    <div>
      @if ( Route::currentRouteName() == 'admin.articles.edit')
      {!!  Form::text('writer' ,  $model->writers->name , array('class'=>'form-control', 'id'=>"show_writer", 'disabled'=>'disabled') ) !!}
        @else
        {!!  Form::text('writer' ,  "", array('class'=>'form-control', 'id'=>"show_writer", 'disabled'=>'disabled') ) !!}

      @endif
    </div>
  </fieldset>
</div>

<!-- introductory title -->
<div class ="form-group">
  <fieldset class="form-group" id="introductory_fieldset">
    {!!  Form::label('introductory', trans('admin.introductory'), array('class' => '')) !!}
    <div>
      {!!  Form::text('introductory' ,  old('introductory') , array('class'=>'form-control') ) !!}
    </div>
  </fieldset>
</div>


<!-- title -->
<div class ="form-group">
  <fieldset class="form-group" id="title_fieldset">
    {!!  Form::label('title', trans('admin.title'), array('class' => '')) !!}
    <div class ="">
      {!!  Form::text('title' ,old('title'), array('class'=>'form-control') ) !!}
    </div>
  </fieldset>
</div>


<!-- date -->
<div class ="form-group" >
  <fieldset class="form-group" id="date_fieldset">
    <div id="datetimepicker1" class='input-group date form-control' >
      {!!  Form::text('date', old('date'), array('class'=>'form-control', 'id'=>"datetimepicker") ) !!} <span class="glyphicon glyphicon-calendar"></span>
    </div>
  </fieldset>
</div>









<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">{!! trans('admin.insert').' '.trans('admin.images') !!}</button>





<div class ="form-group">
  <fieldset class="form-group" id="content_fieldset">
    {!!  Form::label('contents', trans('admin.content'), array('class' => '')) !!}
    <div>
      {!!  Form::textarea('content' ) !!}
    </div>
  </fieldset>
</div>


<div class ="form-group">
  <fieldset class="form-group" id="section_fieldset">
    {!!  Form::label('section', trans('admin.section'), array('class' => '')) !!}
    <div>
      {!!  Form::select('section',  $categorys_new  ,null, ['class' => 'form-control']) !!}
    </div>
  </fieldset>
</div>





<div class ="form-group">
  <fieldset class="form-group">
    {!!  Form::label('comments_status', trans('admin.comments_status'), array('class' => '')) !!}
    <div>
      {!!  Form::select('comments_status',
        array(
          '1'=>  trans('admin.yes') ,
          '0'=>  trans('admin.no')  ,

        ),null, ['class' => 'form-control'] ) !!}
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



<script type="text/javascript">
    $.datetimepicker.setLocale('ar');

    $(function () {
        $('#datetimepicker').datetimepicker({
        });
    });
</script>
@endpush
