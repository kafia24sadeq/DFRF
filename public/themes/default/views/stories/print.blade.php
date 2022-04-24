<html>
<head>
<title>{!! $post->title." ".settings("websiteName") !!}</title>
    <!-- Favicon -->
    <link rel='shortcut icon' type='image/x-icon' href="{!! ThemeHelper() !!}img/sys/favicon.ico" />
</head>

<body dir="rtl">



<div style="width: 50%; margin: 20px auto">
    <div style="text-align: center">
        <img src="{!! ThemeHelper()."img/logo.png"!!}" width="400px" alt="">
    <h2>{!! settings("websiteName") !!}</h2>
    <div>{!! Carbon\Carbon::today() !!}</div>
    </div>
    <hr>
    <h1>{!! $post->title !!}</h1>
    <div>{!! $post->categories->name !!}</div>
    <small>{!! $post->date !!}</small>
    <div>
        <img src="{!! PhotosDir($post->image_name) !!}" height="500px" style="display: block;margin: 0 auto" alt="">
        <small>{!! $post->caption !!}</small>
        <p>{!! $post->content !!}</p>
    </div>

    <div style="margin: 20px">{!! route("post", $post->id) !!}</div>

    <div style="margin: 20px">You for Information technology</div>


</div>




</body>
</html>
