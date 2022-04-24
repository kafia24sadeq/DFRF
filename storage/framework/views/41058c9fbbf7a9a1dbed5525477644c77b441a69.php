<?php $__env->startPush('message'); ?>
<div class="animated slideInUp" id="message" style="display:none" >
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="btn-group" role="group" aria-label="...">

                <a href="/admin/controlpanel" class="btn btn-default"><?php echo trans("admin.controlpanel"); ?></a>
                <a href="/" class="btn btn-default"><?php echo trans("admin.website"); ?></a>
                <a href="/logout" class="btn btn-default"><?php echo trans("admin.logout"); ?></a>
            </div>
        </div>
    </div>

</div>
<?php $__env->stopPush(); ?>


<script src="/js/bootstrap-notify-master/bootstrap-notify.min.js" ></script>
<link rel="stylesheet" href="/js/bootstrap-notify-master/animate.css" media="screen" title="no title" charset="utf-8">
<script type="text/javascript">

    $(document).ready(function() {
        var form = $("#myform");
        $('#save , #draft, #delete').click(function(event) {
            event.preventDefault();

            var button =  $(this) ;

            $(button).attr("disabled", true);
            $(button).append(' <i class="wait fa fa-cog fa-spin fa-3x fa-fw" style="font-size:15px"></i>');


            $(".error_msg").html(" ");
            $(".has-error-text").html(" ");


            $(".has-error").removeClass("has-error");

            document.getElementById('action').value  = $(this).attr("id");

            if (typeof tinyMCE != "undefined") {

                tinyMCE.triggerSave();
                document.getElementById('content').value =   contents = $("#content").val();
                <?php if( starts_with(Route::currentRouteName() , 'products')): ?>
                    document.getElementById('other_images').value =   contents = $("#other_images").val();
                <?php endif; ?>

//                document.getElementById('activities').value =   contents = $("#activities").val();
//                document.getElementById('projects').value =   contents = $("#projects").val();

            }

            $("#result").text('');
            $.ajax({
                url: form.attr('action'),
                type: "POST",
                data: form.serialize(),
                dataType: "json"
            })
                .done(function (response) {
                    $("#myform").hide();
                    $(".image_upload").hide();
                    $("#message").show();
                    $(".error_msg").html(" ");
                    $(".has-error-text").html(" ");
                    $(".has-error").removeClass("has-error");

                    $.notify({
                        // options
                        title: '<?php echo trans("admin.thank"); ?>',
                        message: "<?php echo trans("admin.success"); ?>"
                    },{
                        // settings
                        type: 'success',
                        placement: {
                            from: "top",
                            align: "left"
                        },
                        // showProgressbar: true,
                    });

                })
                .error(function (response) {
                    $(button).attr("disabled", false);
                    $( ".wait" ).remove();


                    if (response === 'Unauthorized.') {


                    }else{


                    }


                    var errors = response.responseJSON;
                    $(".alert").removeClass('bg-danger');
                    $.each(errors, function (index, value) {

                        $("#"+index+"_fieldset").addClass('has-error');
                        if(index == "content"){
                            $(".mce-tinymce").addClass('has-error-content');
                        }
                        $("#"+index+"_fieldset").append("<div class='has-error-text'>"+value+"</div>");


                        $.notify({
                            // options
                            title: '<?php echo trans('admin.error'); ?>',

                            message: "<p>"+value+"</p>"
                        },{
                            // settings
                            type: 'danger',
                            placement: {
                                from: "top",
                                align: "left"
                            },
                            // showProgressbar: true,
                        });



                    });



                });

        });
    });

</script>
