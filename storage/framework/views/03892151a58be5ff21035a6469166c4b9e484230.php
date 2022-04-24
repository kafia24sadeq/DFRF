<div class id="result">
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('.actionable').click(function (event) {
            event.preventDefault();
            var form = $(this).closest('form');
            var formData = new FormData();
            var image_tags = document.getElementById("image_tags");
            var copyrights = document.getElementById("copyrights");
            var transparency = document.getElementById("transparency");
            formData.append('image_tags', image_tags);
            formData.append('copyrights', copyrights);
            formData.append('transparency', transparency);
// ...
            formData.append('file', document.getElementById("files").files);
            var tr = $(this).parents('tr');
            tr.addClass('animated bounceOutLeft');
            // var formData = new FormData($(this)[0]);
            $.ajax({
                url: form.attr('action'),
                type: "POST",
                data: new FormData(form[0]),
                dataType: "json",
                processData: false,
                contentType: false,
            })
                .done(function (response) {
                    $.each(response.files, function (index, file) {
                        $('#allfiles').append("<div id='testimage'><img width='100%'  src='/" + file.url + "'  /></div>");
                        tinymce.activeEditor.execCommand('mceInsertContent', false, "<div id='testimage'><img width='100%'  src='/" + file.url + "'  />");
                    });
                    tr.hide();
                    $.notify({
                        // options
                        title: 'success',
                    }, {
                        // settings
                        type: 'success',
                        // showProgressbar: true,
                    });
                })
                .fail(function (response) {
                    if (response === 'Unauthorized.') {
                    } else {
                    }
                    var errors = response.responseJSON;
                    $(".alert").removeClass('alert-danger');
                    $.each(errors, function (index, value) {
                        $.notify({
                            // options
                            title: 'error',
                            message: "<p>" + value + "</p>"
                        }, {
                            // settings
                            type: 'danger',
                            // showProgressbar: true,
                        });
                    });
                });
        });
    });
</script>
