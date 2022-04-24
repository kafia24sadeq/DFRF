<style media="screen">
* {
  margin: 0;
  padding: 0;
}
</style>


<!-- name -->
<div class ="form-group image_upload">
  <fieldset class="form-group" id="image_fieldset">
    <div class="" >
      <div class="container-fluid">
        <div class="">
                @if ( ends_with(Route::currentRouteName() , 'uploadfiles.create'))
                  {!! Form::open(array('type'=>'post','file'=>'true', 'url'=>'uploadfile', 'id'=>'' ,'class'=>"" )) !!}
                @elseif( ends_with(Route::currentRouteName() , 'uploadfiles.edit'))
                  {!! Form::open(array('type'=>'post','file'=>'true', 'url'=>'uploadimage/'.$model->id.'/edit/', 'id'=>'' ,'class'=>"" )) !!}

                @else
                  {!! Form::open(array('type'=>'post','file'=>'true', 'url'=>'uploadimage', 'id'=>'' ,'class'=>"" )) !!}

                @endif

                <fieldset class="form-group" id="">
                  {!!  Form::label('name', trans('admin.name'), array('class' => '')) !!}

                  <div class ="">
                    {!!  Form::text('name' ,old('name'), array('class'=>'form-control') ) !!}
                  </div>
                </fieldset>

                    <span class="btn btn-info btn-file">
                      {!! trans('admin.upload') !!}
                      <input id="fileupload"  class="file" type="file" name="file">
                    </span>

                    <div id="progress" class="progress" style="">
                      <div class="progress-bar progress-bar-success"></div>
                    </div>

                    {!! Form::close() !!}

                  <fieldset class="form-group" >
                    {!!  Form::label('link', trans('admin.link'), array('class' => '')) !!}

                    <div class ="">
                      {!!  Form::text('link',  old('link')  , ['class' => 'form-control']) !!}
                    </div>
                  </fieldset>

              </div>




            </div>
          </div>
      </fieldset>
    </div>


    @push('scripts')

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
    <!-- The Load Image plugin is included for the preview images and image resizing\
    functionality -->
    <script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
    <!-- The Canvas to Blob plugin is included for image resizing functionality -->
    <script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
    <!-- jQuery File Upload Plugin -->
    <script src="/js/jQuery-File-Upload-master/js/vendor/jquery.ui.widget.js"></script>
    <script src="/js/jQuery-File-Upload-master/js/jquery.iframe-transport.js"></script>
    <script src="/js/jQuery-File-Upload-master/js/jquery.fileupload.js"></script>
    <script src="/js/jQuery-File-Upload-master/js/jquery.fileupload-process.js"></script>
    <script src="/js/jQuery-File-Upload-master/js/jquery.fileupload-image.js"></script>




    <script type="text/javascript">
    $(document).on('click', '.image_insert', function(){
      $("#image").val( $(this).attr('alt'));
      $("#testimage ").children( "img" ).attr('src', $(this).attr('src')) ;
      $("#selectImageresult").html('');
    });

    //for laravel tokens
    $.ajaxSetup(
      {
        headers:
        {
          'X-CSRF-Token': $('input[name="_token"]').val()
        }
      });



      //for image select from Database

      $(document).ready(function() {
        var form = $("#selectImage");
        form.keyup(function(e){
          $.ajax({
            url: $("#selectImageForm").attr('action'),
            type: "POST",
            data: form.serialize(),
          })
          .done(function (response) {
            $("#selectImageresult").html( "<p>"+response+"</p>" );


          })
          .fail(function (response) {
            $("#selectImageresult").html( "<p>"+response+"</p>" );

          });
        });
      });








      //for image upload
      $(function () {
        'use strict';
        var url = '/uploadfile';
        $('#fileupload').fileupload({
          url: url,
          dataType: 'json',
          autoUpload: true,
          acceptFileTypes: /(\.|\/)(pdf|word|wordx)$/i,
          singleFileUploads: true,
          maxFileSize: 999000,
          previewMaxWidth: 300,
          previewMaxHeight: 300,
          previewCrop: false
        }).on('fileuploadadd', function (e, data) {
          $('#progress').fadeIn();
          data.context = $('<div class="fileinfo"><div/>').appendTo('#files');
          $.each(data.files, function (index, file) {
            // var node = $('<p/>')
            // .append($('<span/>').text(file.name));
            // node.appendTo(data.context);
          });
        }).on('fileuploadprocessalways', function (e, data) {
          var index = data.index,
          file = data.files[index],
          node = $(data.context.children()[index]);
          if (file.preview) {
            node
            // .prepend('<br>')
            // .prepend(file.preview);
          }
        }).on('fileuploadprogressall', function (e, data) {
          var progress = parseInt(data.loaded / data.total * 100, 10);
          $('#progress .progress-bar').css(
            'width',
            progress + '%'
          );
        }).on('fileuploaddone', function (e, data) {
          $('#files').empty();
          $.each(data.result.files, function (index, file) {
            if (file.url) {
              var currentTime = (new Date()).getTime();
              $('#link').val(file.url);

              // reset the progress bar
              $('#progress').fadeOut();
              setTimeout(function () {
                $('#progress .progress-bar').css('width', 0);
              }, 500);
            } else if (file.error) {
              var error = $('<span class="text-danger"/>').text("/files/"+file.error);
              $(data.context.children()[index])
              .append('<br>')
              .append(error);
            }
          });
        }).on('fileuploadfail', function (e, data) {
          $.each(data.files, function (index) {
            var error = $('<span class="text-danger"/>').text('File upload failed.');
            $(data.context.children()[index])
            .append('<br>')
            .append(error);
          });
        });
      });
      </script>
    @endpush
