@extends('layouts.app')


@section('content')
@section('title', trans('').' '.trans('').' '.trans('admin.adminStat') )
@section('PageHeading', trans('').' '.trans('').' '.trans('admin.adminStat') )



{{--<div class="panel panel-default">--}}
{{--  <div class="panel-body">--}}
{{--    {!! trans('admin.adminStat') !!}--}}
{{--  </div>--}}
{{--</div>--}}

<!--<form method="POST" action="projects/save" accept-charset="UTF-8" class="" id="myformama" name="myformama">success   -->
{{-- @if ($success ==1)
<div class="alert alert-success" role="alert">
  تم الحفظ في نجاح
</div>
@endif --}}
{!! Form::model($projects , array('route' => array('projects.update', $projects->id),  'method' => 'PUT', 'class'=>'', 'id'=>'myform' , 'name'=>'myform')) !!}
<?php   //  {!! csrf_field() !!} ?>
{{ method_field('PATCH') }}

<div class="form-group">
  <fieldset class="form-group" id="title_fieldset">
    <label for="beneficiaries" class="">المتقدمين</label>
    <div class="">
      <input class="form-control" name="applicants_num" type="text" value="{!! $projects->applicants_num !!}"
        id="beneficiaries">
    </div>
  </fieldset>
</div>

<div class="form-group">
  <fieldset class="form-group" id="title_fieldset">
    <label for="idea" class="">المتدربين</label>
    <div class="">
      <input class="form-control" name="trainees_num" type="text" value="{!! $projects->trainees_num !!}" id="idea">
    </div>
  </fieldset>
</div>

<div class="form-group">
  <fieldset class="form-group" id="title_fieldset">
    <label for="team" class="">عدد المراكز</label>
    <div class="">
      <input class="form-control" name="centers_num" type="text" value="{!! $projects->centers_num !!}" id="team">
    </div>
  </fieldset>
</div>
<div class="form-group">
    <fieldset class="form-group" id="title_fieldset">
        <label for="team" class="">عدد الدورات</label>
        <div class="">
            <input class="form-control" name="courses_no" type="text" value="{!! $projects->courses_no !!}" id="team">
        </div>
    </fieldset>
</div>

<div class="form-group">
  {!! Form::submit(' حفظ ', ['class' => 'btn btn-info']) !!}
</div>


{!! Form::close() !!}


@endsection
