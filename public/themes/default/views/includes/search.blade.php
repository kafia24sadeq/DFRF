<div class="row" style="margin: 20px 0;overflow: hidden; ">
    {{--search form--}}
    {!! Form::open(array('method'=>'GET', 'route' => 'search', 'class'=>' ')) !!}


    <div class="form-group col-xs-9" style="margin: 0; padding: 0">
        <input name="search" id="search" type="text" class="form-control" placeholder="{!! trans("public.search") !!}">
    </div>
    <div class="form-group col-xs-3" style="margin: 0; padding: 0">
        <button type="submit" class="btn" style="margin-top: 0px;padding: 10px 20px;width: 100%">{!! trans("public.search") !!}</button>
    </div>

    </form>
</div>


<style>
    #search  {
        width: 100%;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        background-color: white;
        background-image: url('searchicon.png');
        background-position: 10px 10px;
        background-repeat: no-repeat;
        padding: 12px 20px 12px 40px;
        -webkit-transition: width 0.4s ease-in-out;
        transition: width 0.4s ease-in-out;}

    #search:focus {
        width: 100%;
    }
</style>