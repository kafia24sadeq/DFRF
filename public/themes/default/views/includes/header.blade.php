<style>
    /* .w-10{
        width: 100% !important;
        
    } */
    .carousel-caption {
    /* bottom: 200px; */
    right: 10%;
    z-index: 10;
    color: #fff;
    width: 450px;
    height: 400px;
    top:32%;
    text-align: center;
    
}
   
  


</style>



{{-- <div class="header-div">
    <h1 class="header-title" style="font-family: AlfFont;background:red">مؤسسة ألف باء مدنية وتعايش</h1>
</div> --}}
@php
    use Systems\Image;
        $slides = Image::where('image_categories_id',1)->where('status',0)->take(6)->get();
        $count = count($slides);
@endphp



<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach($slides as $image)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
        @endforeach
    </ol>
    

    <div class="carousel-inner" >


        @forelse ($slides as $key => $slide)
        <div class="carousel-item {{ $key == 0 ? ' active' : '' }}">
            <img src="/photos/{{ $slide->name }}" class="d-block w-10" alt="...">
            <div class="carousel-caption ">


                    {{-- @if ( $slide->caption != "")
                    <div class="carousel-title">
                        <p style="color: white !important;">{{ $slide->caption }}</p>
                    </div>
                    @endif --}}



                    @if ( $slide->content != "")
                      <div class="carousel-content">
                      <p style="color:white !important;">{!! strip_tags(str_limit( $slide->content ,400,'...')) !!}</p> 
                      <div style="text-align:center;margin-left:81px;margin-right:81px">
                        <button type="button" class="btn btn-web" style="margin-top:100px;padding-top:10px;padding-bottom:10px">وقع العريضة</button>
                      </div>
                      
                      </div>
                     @endif
            </div>
        </div>
            @empty
            <div class="carousel-item">
                <img src="{!! ThemeHelper() !!}/img/no_courses.svg" class="d-block w-10" alt="...">
            </div>
        @endforelse


    </div>
    {{-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a> --}}
</div>
