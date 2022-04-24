@extends('layouts.app')

@section('content')

@section('title',  trans('admin.edit').' '.trans('admin.article') )
@section('PageHeading',  trans('admin.edit').' '.trans('admin.article') )

{{-- inclide tinymce script for this page --}}
@include('admin.jquery.tinymce')








<div id="menu1" class="">

  {!! Form::open(array('type'=>'post', 'url'=>'searchWriter', 'id'=>'searchWriterForm' ,'class'=>"" )) !!}
  {!!  Form::label('writer',  trans('admin.choose').' '.trans('admin.writer')) !!}

  <input type="text" id="searchWriter" name="searchWriter" class="form-control" placeholder="{!! trans("admin.search") !!}...">
  {!! Form::close() !!}


</div>
<div class="article_writer_result" id="article_writer_result" style="">

</div>

{!! Form::model($model, array('route' => array('articles.update', $model->id),  'method' => 'PUT', 'class'=>'', 'id'=>'myform' , 'name'=>'myform')) !!}
<div class="">

  @include('admin.articles.form_partial')
</div>




@endsection
@push('scripts')
<script>
    $(document).on('click', '.seclectWriter', function(){
        $("#article_writer").val( $(this).children("span").text());
        $("#show_writer").val( $(this).children("p").text());
        $("#article_writer_result").html("");
    });

    //for laravel tokens
    $.ajaxSetup(
        {
            headers:
                {
                    'X-CSRF-Token': $('input[name="_token"]').val()
                }
        });






    $(document).ready(function() {
        var form = $("#searchWriter");
        form.keyup(function(e){
            $.ajax({
                url: $("#searchWriterForm").attr('action'),
                type: "POST",
                data: form.serialize(),
            })
                .done(function (response) {
                    $("#article_writer_result").html( "<p>"+response+"</p>" );


                })
                .fail(function (response) {
                    $("#article_writer_result").html( "<p>"+response+"</p>" );

                });
        });
    });
</script>
@endpush
