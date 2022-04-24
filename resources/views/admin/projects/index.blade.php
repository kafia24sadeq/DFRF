@extends('layouts.app')


@section('content')
@section('title',  trans('admin.show').' '.trans('admin.all').' '.trans('admin.projects') )
@section('PageHeading',  trans('admin.show').' '.trans('').' '.trans('admin.adminStat') )



<div class="panel panel-default">
    <div class="panel-body">
        {!! trans('admin.projects') !!}
    </div>
</div>

<!--<form method="POST" action="projects/save" accept-charset="UTF-8" class="" id="myformama" name="myformama">success   -->
{{-- @if ($success ==1)
<div class="alert alert-success" role="alert">
  تم الحفظ في نجاح
</div>
@endif --}}
{!! Form::open(array('url' => 'admin/projects' , 'class'=>'' , 'id'=>'myform' , 'name'=>'myform')) !!}
 <?php   //  {!! csrf_field() !!} ?>
 {{ method_field('PATCH') }}

<div class="form-group">
<fieldset class="form-group" id="title_fieldset">
<label for="beneficiaries" class="">المستفيدين</label>
<div class="">
<input class="form-control" name="beneficiaries" type="text" value="{!! $projects->beneficiaries !!}" id="beneficiaries">
</div>
</fieldset>
</div>

<div class="form-group">
<fieldset class="form-group" id="title_fieldset">
<label for="idea" class="">المشاريع</label>
<div class="">
<input class="form-control" name="projects" type="text" value="{!! $projects->projects !!}" id="idea">
</div>
</fieldset>
</div>

<div class="form-group">
<fieldset class="form-group" id="title_fieldset">
<label for="team" class="">عدد المناطق</label>
<div class="">
<input class="form-control" name="areas" type="text" value="{!! $projects->areas !!}" id="team">
</div>
</fieldset>
</div>
   

<div class="form-group">
{!! Form::submit(' حفظ ', ['class' => 'btn btn-info']) !!}
</div>


{!! Form::close() !!}


@endsection
