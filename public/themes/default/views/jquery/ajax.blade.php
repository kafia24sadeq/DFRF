<div id="result">

</div>

<script src="/js/bootstrap-notify-master/bootstrap-notify.min.js" ></script>
<link rel="stylesheet" href="/js/bootstrap-notify-master/animate.css" media="screen" title="no title" charset="utf-8">
<script type="text/javascript">

$(document).ready(function() {
  var form = $("#application");
  $('#save , #draft, #delete').click(function(event) {
    event.preventDefault();

    $("#result").text('');
    $.ajax({
      url: form.attr('action'),
      type: "POST",
      data: form.serialize(),
      dataType: "json"
    })
    .done(function (response) {

        $("#application").hide();
        $(".image_upload").hide();
        $("#message").show();
        $(".error_msg").html(" ");
        $(".has-error").removeClass("has-error");
      $.notify({
        // options
        title: '',
          message: "<p>{!! trans('public.success') !!}</p>"
      },{
        // settings
        type: '',
        // showProgressbar: true,
      });

    })
    .fail(function (response) {
      if (response === 'Unauthorized.') {
      }else{

      }
      var errors = response.responseJSON;
      $.each(errors, function (index, value) {
          $("#"+index+"_fieldset").addClass('has-error');
          if(index == "content"){
              $(".mce-tinymce").addClass('has-error-content');
          }
          $("#"+index+"_fieldset").append("<div class='has-error-text'>"+value+"</div>");

        $.notify({
          // options
          title: '{!! trans('public.error') !!}',

          message: "<p>"+value+"</p>"
        },{
          // settings
          type: 'danger',
          // showProgressbar: true,
        });



      });
    });
  });
});
$(document).ready(function() {
    var form = $("#contact");
    $('#save , #draft, #delete').click(function(event) {
        event.preventDefault();

        $("#result").text('');
        $.ajax({
            url: form.attr('action'),
            type: "POST",
            data: form.serialize(),
            dataType: "json"
        })
            .done(function (response) {

                $("#contact").hide();
                $(".image_upload").hide();
                $("#message").show();
                $(".error_msg").html(" ");
                $(".has-error").removeClass("has-error");
                $.notify({
                    // options
                    title: '',
                    message: "<p>{!! trans('public.success') !!}</p>"
                },{
                    // settings
                    type: '',
                    // showProgressbar: true,
                });

            })
            .fail(function (response) {
                if (response === 'Unauthorized.') {
                }else{

                }
                var errors = response.responseJSON;
                $.each(errors, function (index, value) {
                    $("#"+index+"_fieldset").addClass('has-error');
                    if(index == "content"){
                        $(".mce-tinymce").addClass('has-error-content');
                    }
                    $("#"+index+"_fieldset").append("<div class='has-error-text'>"+value+"</div>");

                    $.notify({
                        // options
                        title: '{!! trans('public.error') !!}',

                        message: "<p>"+value+"</p>"
                    },{
                        // settings
                        type: 'danger',
                        // showProgressbar: true,
                    });



                });
            });
    });
});
</script>
