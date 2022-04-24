


<div class="" >
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-9" style="">



        {!!  Form::hidden('vid' ,old('vid'),array('id' => 'vid')) !!}
        {!!  Form::hidden('image_name' ,old('image_name'),array('id' => 'image')  ) !!}


        <!-- url -->
        <div class ="form-group">
          <fieldset class="form-group" id="url_fieldset">
            {!!  Form::label('url', trans('admin.url')) !!}
            <div class ="">
              {!!  Form::text('url' , old('videoURL'), array('class'=>'form-control','id' => 'url') ) !!}

            </div>
          </fieldset>
            <fieldset class="form-group" id="url_fieldset">
                {!!  Form::label('url', 'الرابط الحالي') !!}
            <input type="text" class="form-control" value="{{ $model->videoURL ?? ''}}" id="url" readonly>
            </fieldset>
        </div>


        <!-- name -->
        <div class ="form-group">
          <fieldset class="form-group" id="title_fieldset">
            {!!  Form::label('title', trans('admin.title')) !!}
            <div class ="">
              {!!  Form::text('title' , old('title') , array('class'=>'form-control','id' => 'title') ) !!}
            </div>
          </fieldset>
        </div>



        <!-- category select -->
        <div class ="form-group">

          <fieldset class="form-group" id="">
            {!!  Form::label('videocategory', trans('admin.album'), array('class' => '')) !!}

            <div class ="">
              {!!  Form::select('video_categories_id',  $VideoCategory  ,null, ['class' => 'form-control']) !!}
            </div>
          </fieldset>
        </div>


        <!-- category status -->
        <div class ="form-group">
          <fieldset class="form-group">
            {!!  Form::label('status', trans('admin.status'), array('class' => '')) !!}
            <div>
              {!!  Form::select('status',
                array(
                  '0'=>  trans('admin.no')  ,
                  '1'=>  trans('admin.yes') ,

                ),null, ['class' => 'form-control'] ) !!}
              </div>
            </fieldset>
          </div>


          @include('admin.includes.buttons')


          {!! Form::close() !!}
        </div>


        <div class="col-md-3" style="">


          <div id="files" class="files">
            @if ( Route::currentRouteName() == 'admin.videos.edit')
            <div id="testimage"><img src= {!! $model->image_name  !!} width="100%"  alt="test image"></div>
            @else
              <div id="testimage"><img src="/cp/img/ph.png" width="100%"  alt="test image"></div>

            @endif
          </div>
        </div>

        <div id="selectImageresult">

        </div>
      </div>
    </div>
  </div>


  @push('scripts')


    <script type="text/javascript">
    //for fetching Youtube video info

    // for laravel tokens
    $.ajaxSetup(
      {
        headers:
        {
          'X-CSRF-Token': $('input[name="_token"]').val()
        }
      });

      $(document).ready(function() {
        var form = $("#url");
        form.keyup(function(e){
          e.preventDefault();

          $.ajax({
            url: '/getvideoinfo',
            type: "POST",
            data: {"url": $("#url").val()},

          })
          .done(function (response) {
            var errors = response;
            $.each(errors, function (index, value) {
              $("#"+index).val( value );
            });

            $("#testimage").children( "img" ).attr('src', errors.testimage );

          })
          .fail(function (response) {
            $("#selectImageresult").html( "<p>"+response+"</p>" );

          });
        });
      });
      </script>
      @include('admin.jquery.ajax')
    @endpush
