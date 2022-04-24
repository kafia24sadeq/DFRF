 <h3 class="panel-title">{!! trans('admin.trash') !!} </h3>



    


    <table class ="table table-striped table-bordered table-hover table-sm ">
      <tr>
        <td>
        {!!trans('admin.posts') !!}
        </td>
        <td style="text-align:center">

          <span class="badge">{!! $countPosts !!}</span>
        </td>
      </tr>
      <tr>

        <td>
      {!!  trans('admin.videos') !!}

        </td>

        <td style="text-align:center">
          <span class="badge">{!! $countVideos !!}</span>
        </td>
      </tr>
      <tr>
        <td>
      {!!  trans('admin.images') !!}
        </td>
        <td style="text-align:center">
          <span class="badge">{!! $countImages !!}</span>
        </td>
      </tr>

      <tr>
        <td>
      {!!  trans('admin.pages') !!}
        </td>
        <td style="text-align:center">
          <span class="badge">{!! $countPages !!}</span>
        </td>
      </tr>

      <tr>
        <td>
      {!!  trans('admin.categories') !!}
        </td>
        <td style="text-align:center">
          <span class="badge">{!! $countCategories !!}</span>
        </td>
      </tr>


      <tr>
        <td>
      {!!  trans('admin.users') !!}
        </td>
        <td style="text-align:center">
          <span class="badge">{!! $countUsers !!}</span>
        </td>
      </tr>




    </table>

    <div class="">

      {!! link_to_route('trash.index',  trans('admin.trash'),array(),  array('class'=>'btn btn-primary btn-xs'))  !!}

    </div>


