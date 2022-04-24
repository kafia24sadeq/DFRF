 @if ( Route::getCurrentRoute()->getActionName() == 'Systems\Http\Controllers\HomeController@index')
<style>
header{
    margin-top: 92px;
    height: 657px;
    background:#F0F0F0;
}
</style>

<div class="nav-sm">
    {{-- @include('includes.navbar-row') --}}
</div>
@include('includes.navbar-row')


<header>
    <div class="carousel-col">
        @include('includes.header')
    </div>
</header>


@push('scripts')
    <script>
        $(".nav-item").on("click", function (e) {
            $("li.nav-item").removeClass("active");
            $(this).addClass("active");
        });
    </script>
@endpush

@else

@include('includes.navbar-row')

@endif
