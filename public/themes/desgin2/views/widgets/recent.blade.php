<div class="widget_wrapper">
  <div class="widget_header">    <h3>{!! trans('admin.stats') !!} </h3>
  <div>






    <table class ="table table-striped table-bordered table-hover table-sm ">
      <tr>
        <td>
          {!! link_to_route('posts.index',   trans('admin.posts'),array(), array(''=>' ')) !!}
        </td>
        <td style="text-align:center">

          <span class="badge">{!! $countPosts !!}</span>
        </td>
      </tr>
      <tr>

        <td>
          {!! link_to_route('videos.index',   trans('admin.videos'),array(), array(''=>' ')) !!}

        </td>

        <td style="text-align:center">
          <span class="badge">{!! $countvideos !!}</span>
        </td>
      </tr>
      <tr>
        <td>
          {!! link_to_route('images.index',   trans('admin.images'),array(), array(''=>' ')) !!}
        </td>
        <td style="text-align:center">
          <span class="badge">{!! $countimages !!}</span>
        </td>
      </tr>

      <tr>
        <td>
          {!! link_to_route('users.index',   trans('admin.users'),array(), array(''=>' ')) !!}
        </td>
        <td style="text-align:center">
          <span class="badge">{!! $countusers !!}</span>
        </td>
      </tr>


    </table>



  </div>
</div>
