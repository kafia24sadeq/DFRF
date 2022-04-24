<button type="button" class="btn btn-success" data-toggle="modal" data-target="#copyModalContent">لصق نص</button>
<div id="copyModalContent" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">قم بلصق النص هنا</h4>
                <button type="button" class="close" data-dismiss="modal" style="margin: unset !important;">&times;
                </button>
            </div>
            <div class="modal-body">
                <div contenteditable="true" id="mdoalTextAreaContent" style="overflow:scroll; height:400px;"
                     class="form-control"></div>
            </div>
            <div class="modal-footer">

                <button type="button" id="insertContent" class="btn btn-success" data-dismiss="modal">إضافة</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">إلغاء</button>
            </div>
        </div>

    </div>
</div>

<style>

    .modal-header {
        display: flex !important;
        justify-content: space-between !important;
    }

    #mdoalTextArea {
        overflow-y: scroll;
        height: 400px;
    }

    #mdoalTextArea::-webkit-scrollbar {
        width: 8px;
    }

    #mdoalTextArea::-webkit-scrollbar-button {
        width: 8px;
        height: 5px;
    }

    #mdoalTextArea::-webkit-scrollbar-track {
        background: #eee;
        border: thin solid lightgray;
        box-shadow: 0px 0px 3px #dfdfdf inset;
        border-radius: 10px;
    }

    #mdoalTextArea::-webkit-scrollbar-thumb {
        background: #ffa455;
        border: thin solid #ffa455;
        border-radius: 10px;
    }

    #mdoalTextArea::-webkit-scrollbar-thumb:hover {
        background: #ffa455;
    }
</style>

@push('scripts')

    <script type="text/javascript">

        $('#insertContent').click(function () {

            let arContent = $('#mdoalTextAreaContent').html();

            tinymce.get("content").execCommand('mceInsertContent', false, arContent.toString());

        });
        $('#copyModalContent').on('hidden.bs.modal', function (e) {
            $('#mdoalTextAreaContent').text("");
        })

    </script>


@endpush
