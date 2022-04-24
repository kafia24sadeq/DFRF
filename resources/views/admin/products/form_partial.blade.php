
<div class="" >
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-9" style="">

        {{--{!!  Form::hidden('vid' ,old('vid'),array('id' => 'vid')) !!}--}}
        {!!  Form::hidden('image_name' ,old('image_name'),array('id' => 'image')  ) !!}
        <!-- image caption -->
          <div class ="form-group">
            <fieldset class="form-group" id="title_fieldset">
              {!!  Form::label('caption', trans('admin.image_caption')) !!}
              <div class ="">
                {!!  Form::text('caption' , old('caption') , array('class'=>'form-control','id' => 'caption') ) !!}
              </div>
            </fieldset>
          </div>


            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">{!! trans('admin.insert').' '.trans('admin.images') !!}</button>
            <div class ="form-group">
                <fieldset class="form-group" id="other_images_fieldset">
                    {!!  Form::label('other_images', trans('admin.other_images'), array('class' => '')) !!}
                    <div>
                        {!!  Form::textarea('other_images' ) !!}
                    </div>
                </fieldset>
            </div>

          <!-- name -->
          <div class ="form-group">
            <fieldset class="form-group" id="name_fieldset">
              {!!  Form::label('name', trans('admin.name')) !!}
              <div class ="">
                {!!  Form::text('name' , old('name') , array('class'=>'form-control','id' => 'name') ) !!}
              </div>
            </fieldset>
          </div>

          <!-- price -->
          <div class ="form-group">
            <fieldset class="form-group" id="price_fieldset">
              {!!  Form::label('price', trans('admin.price')) !!}
              <div class ="">
                {!!  Form::text('price' , old('price'), array('class'=>'form-control','id' => 'price') ) !!}
              </div>
            </fieldset>
          </div>

          <!-- warranty -->
        <div class ="form-group">
          <fieldset class="form-group" id="url_fieldset">
            {!!  Form::label('warranty', trans('admin.warranty')) !!}
            <div class ="">
              {!!  Form::text('warranty' , old('warranty'), array('class'=>'form-control','id' => 'warranty') ) !!}
            </div>
          </fieldset>
        </div>

        <!-- warranty -->
        <div class ="form-group">
          <fieldset class="form-group" id="url_fieldset">
            {!!  Form::label('discount', trans('admin.discount')) !!}
            <div class ="">
              {!!  Form::text('discount' , old('discount'), array('class'=>'form-control','id' => 'discount') ) !!}
            </div>
          </fieldset>
        </div>


        {{--<!-- name -->--}}
        {{--<div class ="form-group">--}}
          {{--<fieldset class="form-group" id="title_fieldset">--}}
            {{--{!!  Form::label('title', trans('admin.title')) !!}--}}
            {{--<div class ="">--}}
              {{--{!!  Form::text('title' , old('title') , array('class'=>'form-control','id' => 'title') ) !!}--}}
            {{--</div>--}}
          {{--</fieldset>--}}
        {{--</div>--}}



        <!-- category select -->
        <div class ="form-group">

          <fieldset class="form-group" id="">
            {!!  Form::label('productcategory', trans('admin.section'), array('class' => '')) !!}

            <div class ="">
              {!!  Form::select('product_categories_id',  $ProductCategory  ,null, ['class' => 'form-control']) !!}
            </div>
          </fieldset>
        </div>

         <!-- company select -->
         <div class ="form-group">
          <fieldset class="form-group" id="">
            {!!  Form::label('productcompany', trans('admin.company'), array('class' => '')) !!}

            <div class ="">
              {!!  Form::select('company_id',  $ProductCompany  ,null, ['class' => 'form-control']) !!}
            </div>
          </fieldset>
        </div>



        <div class ="form-group">
            <fieldset class="form-group" id="content_fieldset">
                {!!  Form::label('content', trans('admin.content'), array('class' => '')) !!}
                <div>
                    {!!  Form::textarea('content') !!}
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
            @include('admin.includes.uploadimagemodal')

      </div>


        {{--<div class="col-md-3" style="">--}}


          {{--<div id="files" class="files">--}}
            {{--@if ( Route::currentRouteName() == 'admin.videos.edit')--}}
            {{--<div id="testimage"><img src= {!! $model->image  !!} width="100%"  alt="test image"></div>--}}
            {{--@else--}}
              {{--<div id="testimage"><img src="/cp/img/ph.png" width="100%"  alt="test image"></div>--}}

            {{--@endif--}}
          {{--</div>--}}
        {{--</div>--}}

        {{--<div id="selectImageresult">--}}

        {{--</div>--}}
      </div>
    </div>
  </div>


  @push('scripts')
    @include('admin.jquery.ajax')
  @endpush
