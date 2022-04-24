<div class="container">
    <div class="breaking_wrapper">
    @if($break->type == 1)
        <h2  class="breakingType col-lg-2">عاجل</h2>

    @elseif($break->type == 2)
        <h2  class="breakingType col-lg-2">هام</h2>

    @elseif($break->type == 3)
        <h2  class="breakingType col-lg-2">تنويه</h2>

    @elseif($break->type == 4)
        <h2  class="breakingType col-lg-2">قبل قليل</h2>

    @elseif($break->type == 5)

    @endif
    @if(isset($break->link) && !empty($break->link))
        <h2 class="breakingContent"><a href="{!! $break->link !!}">{!! $break->title !!}</a></h2>
    @else
        <h2 class="breakingContent">{!! $break->title !!}</h2>

    @endif
    </div>
</div>

<style>
    .breaking_wrapper{
        border: 2px solid red;
        margin: 20px auto;
        padding: 10px ;
    }

    .breaking_wrapper .breakingType{

    }

    .breaking_wrapper .breakingContent{
        color: red;
    }
</style>