<div  id="result">

</div>

<script src="/js/bootstrap-notify-master/bootstrap-notify.min.js" ></script>
<link rel="stylesheet" href="/js/bootstrap-notify-master/animate.css" media="screen" title="no title" charset="utf-8">
<script type="text/javascript">

$(document).ready(function() {
    $('.actionable').click(function(event) {
      event.preventDefault();


    var  form = $(this).closest('form');
    var tr = $(this).parents('tr');
    tr.addClass('animated bounceOutLeft');


    $.ajax({
      url: form.attr('action'),
      type: "POST",
      data: form.serialize(),
      dataType: "json"
    })
    .done(function (response) {

      tr.hide();
      $.notify({
        // options
        title: 'success',

      },{
        // settings
        type: 'success',
        // showProgressbar: true,
      });


    })
    .fail(function (response) {
      if (response === 'Unauthorized.') {
      }else{

      }
      var errors = response.responseJSON;
      $(".alert").removeClass('alert-danger');
      $.each(errors, function (index, value) {

            $.notify({
            	// options
              title: 'error',

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
