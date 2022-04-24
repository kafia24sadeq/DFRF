<style media="screen">
    * {
        margin: 0;
        padding: 0;
    }
</style>



<!-- name -->
<div class ="form-group image_upload">
    <fieldset class="form-group" id="image_fieldset">
        <?php echo Form::label('image', trans('admin.image'), array('class' => '')); ?>

        <div class="" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9" style="">
                        <?php if( starts_with(Route::currentRouteName() , 'images') == false ): ?>

                            <ul class="nav nav-tabs nav-justified">
                                <li class="active"><a data-toggle="tab" href="#home">  <?php echo trans('admin.upload'); ?> </a></li>
                                <li><a data-toggle="tab" href="#menu1"> <?php echo trans('admin.select'); ?></a></li>
                            </ul>
                        <?php endif; ?>
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">


                                <?php if(ends_with(Route::currentRouteName() , 'images.create') ): ?>
                                    <?php echo Form::open(array('type'=>'post','file'=>'true', 'url'=>'uploadimage', 'id'=>'' )); ?>

                                <?php elseif( ends_with(Route::currentRouteName() , 'images.edit')): ?>
                                    <?php echo Form::model($model , array('type'=>'post','file'=>'true', 'url'=>'updateimage', 'id'=>'' )); ?>

                                    <?php echo Form::hidden('id', $model->id ); ?>

                                <?php else: ?>
                                    <?php echo Form::open(array('type'=>'post','file'=>'true', 'url'=>'uploadimage', 'id'=>'' )); ?>

                                <?php endif; ?>

                                <fieldset class="form-group" id="">
                                    <?php echo Form::label('image_tags', trans('admin.tags'), array('class' => '')); ?>


                                    <div class ="">
                                        <?php echo Form::text('image_tags' ,old('image_tags'), array('class'=>'form-control') ); ?>

                                    </div>
                                </fieldset>

                                <?php if( starts_with(Route::currentRouteName() , 'images')): ?>
                                    <fieldset class="form-group" >
                                        <?php echo Form::label('link', trans('admin.link'), array('class' => '')); ?>


                                        <div class ="">
                                            <?php echo Form::text('link',  old('link')  , ['class' => 'form-control']); ?>

                                        </div>
                                    </fieldset>

                                    <fieldset class="form-group" id="">
                                        <?php echo Form::label('imagecategory', trans('admin.album'), array('class' => '')); ?>


                                        <div class ="">
                                            <?php echo Form::select('imagecategory',  $ImageCategory  ,null, ['class' => 'form-control']); ?>

                                        </div>
                                    </fieldset>


                                    <fieldset class="form-group" id="">
                                        <?php echo Form::label('content', trans('admin.description'), array('class' => '')); ?>


                                        <div class ="">
                                            <?php echo Form::textarea('content' ,old('content'), array('class'=>'form-control') ); ?>

                                        </div>
                                    </fieldset>
                                <?php else: ?>
                                    <?php echo Form::hidden('content' ,'' ); ?>

                                    <?php echo Form::hidden('imagecategory' ,'1' ); ?>

                                    <?php echo Form::hidden('link' ,'' ); ?>

                                <?php endif; ?>

                                    <?php if( starts_with(Route::currentRouteName() , 'admin.posts')): ?>
                                        <?php echo Form::hidden('imagecategory' , 1 ); ?>

                                    <?php endif; ?>

                                    <?php if( starts_with(Route::currentRouteName() , 'admin.ads')): ?>
                                        <?php echo Form::hidden('imagecategory' , 19 ); ?>

                                    <?php endif; ?>

                                    <fieldset class="form-group" id="">
                                    <?php echo Form::label('copyrights', trans('admin.copyrights'), array('class' => '')); ?>


                                    <div class ="">
                                        <?php echo Form::select('copyrights',
                                          array(
                                            '0'=>'بدون',
                                            'center'=>'وسط',
                                            'top'=>'فوق',
                                            'bottom'=>'تحت',
                                            'right'=>'يمين',
                                            'left'=>'يسار',
                                            'top-left'=>'فوق يسار',
                                            'top-right'=>'فوق يمين',
                                            'bottom-left'=>'تحت يسار',
                                            'bottom-right'=>'تحت يمين',
                                          ) ,null, ['class' => 'form-control'] ); ?>

                                    </div>
                                </fieldset>


                                <fieldset class="form-group" id="">
                                    <?php echo Form::label('transparency', trans('admin.transparency'), array('class' => '')); ?>


                                    <div class ="">
                                        <?php echo Form::select('transparency',
                                          array(
                                            '0'=>'0%',
                                            '20'=>'20%',
                                            '40'=>'40%',
                                            '50'=>'50%',
                                            '60'=>'60%',
                                            '80'=>'80%',
                                            '90'=>'90%',

                                          ) ,null, ['class' => 'form-control'] ); ?>

                                    </div>
                                </fieldset>


                                <span class="btn btn-info btn-file">
                      <?php echo trans('admin.upload'); ?>

                                    <input id="fileupload"  class="file" type="file" name="file">
                    </span>



                                <div id="progress" class="progress" style="">
                                    <div class="progress-bar progress-bar-success"></div>
                                </div>
                                <?php echo Form::close(); ?>

                            </div>
                            <?php if( starts_with(Route::currentRouteName() , 'images') == false ): ?>

                                <div id="menu1" class="tab-pane fade">
                                    <?php echo Form::open(array('type'=>'post', 'url'=>'searchImage', 'id'=>'selectImageForm' ,'class'=>"selectImageForm" )); ?>

                                    <input type="text" id="selectImage" name="selectImage" class="form-control" placeholder="Search for...">
                                    <?php echo Form::close(); ?>

                                    <div class="selectImageresult" id="selectImageresult" style="">
                                    </div>
                                </div>
                            <?php endif; ?>



                        </div>

                    </div>


                    <div class="col-md-3" style="">
                        <div id="files" class="files">
                            <?php if(ends_with(Route::currentRouteName(), 'images.edit')  ): ?>
                                <div id="testimage"><img src="/photos/<?php echo $model->name; ?>" width="100%"  alt="test image"></div>
                                <?php elseif(ends_with(Route::currentRouteName(), 'pictures.edit')  ): ?>
                                <div id="testimage"><img src="/photos/<?php echo $model->name; ?>" width="100%"  alt="test image"></div>
                            <?php elseif(ends_with(Route::currentRouteName(), 'edit')  ): ?>
                                <div id="testimage"><img src="<?php echo PhotosDir($model->image_name); ?>" width="100%"  alt="test image"></div>
                            <?php else: ?>
                                <div id="testimage"><img src="/cp/img/ph.png" width="100%"  alt="test image"></div>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </fieldset>
</div>


<?php $__env->startPush('scripts'); ?>

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
        var form = $("#selectImage");

        $('#fileupload').fileupload({
            url: form.attr('action'),
            dataType: 'json',
            autoUpload: true,
            acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
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
                    $('#files').append("<div id='testimage'><img width='100%'  src='/" + file.url +"?" + currentTime + "' /></div>");
                    $("#image").val(file.name);

                    // reset the progress bar
                    $('#progress').fadeOut();
                    setTimeout(function () {
                        $('#progress .progress-bar').css('width', 0);
                    }, 500);
                } else if (file.error) {
                    var error = $('<span class="text-danger"/>').text(file.error);
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
<?php $__env->stopPush(); ?>
