<ul class="list-group list-group-root ">
  @if (Auth::check())
    <div class="list-group">
      @permission('controlpanel.index')
      <a class="list-group-item" href="{{ url('/admin/controlpanel') }}">{!! trans('admin.controlpanel')  !!}</a>
      @endpermission
      <a class="list-group-item" target="_blank" href="{{ url('/') }}">{!! trans('admin.website')  !!}</a>

    </div>

    <div class="panel panel-default">
      <div class="panel-heading">{!! trans('admin.posts') !!}</div>

      @permission('posts.index')
      <a class="list-group-item" href="{{ url('/admin/posts/') }}">{!! trans('admin.all').' '.trans('admin.posts') !!} </a>
      @endpermission
      @permission('posts.create')
      <a class="list-group-item" href="{{ url('/admin/posts/create') }}">{!! trans('admin.create').' '.trans('admin.post') !!}</a>
      @endpermission

      @permission('categories.index')
      <a class="list-group-item" href="{{ url('/admin/categories/') }}">{!! trans('admin.categories').' '.trans('admin.posts') !!}</a>
      @endpermission
      @permission('categories.create')
      <a class="list-group-item" href="{{ url('/admin/categories/create') }}">{!! trans('admin.create').' '.trans('admin.category') !!}</a>
      @endpermission

    </div>


    <div class="panel panel-default">
      <div class="panel-heading">{!! trans('admin.images') !!}</div>

      @permission('images.index')
      <a class="list-group-item" href="{{ url('/admin/images/') }}">{!! trans('admin.all').' '.trans('admin.images') !!}</a>
      @endpermission
      @permission('images.create')
      <a class="list-group-item" href="{{ url('/admin/images/create') }}">{!! trans('admin.create').' '.trans('admin.image') !!}</a>
      @endpermission
      @permission('imagecategories.create')
      <a class="list-group-item" href="{{ url('/admin/imagecategories/create') }}">{!! trans('admin.categories').' '.trans('admin.images') !!}</a>
      @endpermission

    </div>


    <div class="panel panel-default">
      <div class="panel-heading">{!! trans('admin.videos') !!}</div>

      @permission('videos.index')
      <a class="list-group-item" href="{{ url('/admin/videos/') }}">{!! trans('admin.all').' '.trans('admin.videos') !!}</a>
      @endpermission
      @permission('videos.create')
      <a class="list-group-item" href="{{ url('/admin/videos/create') }}">{!! trans('admin.create').' '.trans('admin.video') !!}</a>
      @endpermission
      @permission('videocategories.create')
      <a class="list-group-item" href="{{ url('/admin/videocategories/create') }}">{!! trans('admin.categories').' '.trans('admin.videos') !!}</a>
      @endpermission

    </div>





    <div class="panel panel-default">
      <div class="panel-heading">{!! trans('admin.tasks') !!}</div>
      @permission('tasks.index')
      <a class="list-group-item" href="{{ url('/admin/tasks/') }}">{!! trans('admin.all').' '.trans('admin.tasks') !!} </a>
      @endpermission
      @permission('tasks.create')
      <a class="list-group-item" href="{{ url('/admin/tasks/create') }}">{!! trans('admin.create').' '.trans('admin.tasks') !!}</a>
      @endpermission
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">{!! trans('admin.pages') !!}</div>

      @permission('pages.index')
      <a class="list-group-item" href="{{ url('/admin/pages/') }}">{!! trans('admin.all').' '.trans('admin.pages') !!} </a>
      @endpermission
      @permission('pages.create')
      <a class="list-group-item" href="{{ url('/admin/pages/create') }}">{!! trans('admin.create').' '.trans('admin.page') !!}</a>
      @endpermission
    </div>


    <div class="panel panel-default">
      <div class="panel-heading">{!! trans('admin.mail') !!}</div>

      @permission('mail.index')
      <a class="list-group-item" href="{{ url('/admin/mail/') }}">{!! trans('admin.mail') !!} </a>
      @endpermission

    </div>

    <div class="panel panel-default">
      <div class="panel-heading">{!! trans('admin.settings') !!}</div>
      @permission('settings.index')
      <a class="list-group-item" href="{{ url('/admin/settings/') }}">{!! trans('admin.settings') !!}</a>
      @endpermission
      @permission('userlogs.index')
      <a class="list-group-item" href="{{ url('/admin/userlogs/') }}">{!! trans('admin.logs') !!} </a>
      @endpermission
      @permission('trash.index')
      <a class="list-group-item" href="{{ url('/admin/trash/') }}">{!! trans('admin.trash') !!}</a>
      @endpermission
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">{!! trans('admin.users') !!}</div>
      @permission('users.index')
      <a class="list-group-item" href="{{ url('/admin/users') }}">{!! trans('admin.all').' '.trans('admin.users') !!}</a>
      @endpermission
      @permission('users.create')
      <a class="list-group-item" href="{{ url('/admin/users/create') }}">{!! trans('admin.create').' '.trans('admin.user') !!}</a>
      @endpermission
      @permission('roles.index')
      <a class="list-group-item" href="{{ url('/admin/roles/') }}">{!! trans('admin.all').' '.trans('admin.roles') !!} </a>
      @endpermission
      @permission('roles.create')
      <a class="list-group-item" href="{{ url('/admin/roles/create') }}">{!! trans('admin.create').' '.trans('admin.role') !!}</a>
      @endpermission
      @permission('permissions.index')
      <a class="list-group-item" href="{{ url('/admin/permissions/') }}">{!! trans('admin.all').' '.trans('admin.permissions') !!}</a>
      @endpermission
      @permission('permissions.create')
      <a class="list-group-item" href="{{ url('/admin/permissions/create') }}">{!! trans('admin.create').' '.trans('admin.permission') !!}</a>
      @endpermission


    </div>


  @endif
</ul>
