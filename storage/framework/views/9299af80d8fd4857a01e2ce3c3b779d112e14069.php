<input type="hidden" value="<?php echo e(csrf_token()); ?>" id="_token">

<script src="https://cdn.tiny.cloud/1/hm9fmohsgqn4786x81di7cuforb3ua0wm20idnd1ri1tv8sq/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>

    tinymce.init({

        selector: 'textarea',  // change this value according to your HTML

        language: 'ar',
        directionality: 'rtl',
        language_url : '/langs/ar.js' ,
        height : "200",
        relative_urls: false,

        valid_elements : '*[*]',
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste imagetools wordcount'
        ],
        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',

        /* we override default upload handler to simulate successful upload*/
        images_upload_handler: function (blobInfo, success, failure) {
            var xhr, formData;
            xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST', '<?php echo route('tiny.upload'); ?>');
            var token = document.getElementById("_token").value;
            xhr.setRequestHeader("X-CSRF-Token", token);
            xhr.onload = function() {
                var json;
                if (xhr.status != 200) {
                    failure('HTTP Error: ' + xhr.status);
                    return;
                }
                json = JSON.parse(xhr.responseText);

                if (!json || typeof json.location != 'string') {
                    failure('Invalid JSON: ' + xhr.responseText);
                    return;
                }
                success(json.location);
            };
            formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());
            xhr.send(formData);
        },
        file_picker_callback: function(cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');
            input.onchange = function() {
                var file = this.files[0];
                var id = 'blobid' + (new Date()).getTime();
                var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                var blobInfo = blobCache.create(id, file);
                blobCache.add(blobInfo);
                cb(blobInfo.blobUri(), { title: file.name });
            };
            input.click();
        },

        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'

    });


</script>
