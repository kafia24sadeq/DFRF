<style>
    .poll_toggle_wrapper
    {
        z-index: 1000000000;

    }

    #poll_wrap
    {
        z-index: 1000000000;

        margin-top: 0px;
        margin-bottom: 30px;
        width: auto;
        height: auto;
        padding: 10px;

    }

    #poll_wrap button {
        padding: 2px;
    }



    #poll_wrap_toggle
    {
        display: block;
        width: 100%;
        height: 35px;
        line-height: 35px;
        background: #9E9E77;
        text-align: center;
        color: white;
        font-weight: bold;
        font-variant: small-caps;
        box-shadow: 2px 2px 3px #888888;
        text-decoration:none;
    }

    #poll_wrap_toggle:hover
    {
        text-decoration:none;
        border-top: 1px groove white;
        border-left: 1px groove white;
        border-bottom: 1px solid #7B7B78;
        border-right: 1px solid #7B7B78;
        color: #663200;
        background: #EBEBB3;
        box-shadow: 1px 1px 2px #888888;
    }
</style>

<style>
    div.static {
        z-index: 1000000000;
        background: white;
        padding: 10px;
        position: fixed;
        bottom: 0;
        width: 200px;
        height: auto;


    }

</style>

<div class="static">
<div class="poll_toggle_wrapper">
    <a href="#0" id="poll_wrap_toggle">اظهار التصويت</a>
</div>
<div id="poll_wrap" style="display: none;">





<div>   {!!  $model->question !!}</div>




<!-- Contact form -->
{!! Form::open(array('route' => array('polls.update' ,  $model->id )   ,'method' => 'PUT', 'id'=>'myform' , 'name'=>'myform')) !!}

<input type="hidden" id="question" name="question" value=" {!!  $model->id   !!}">

@for($i = 0 ; $i <= 10 ; $i++)
    <div>
        @if(isset($options[$i]['name']))
            <input type="radio" id="radioButton" name="radio" value="{!!  $options[$i]['id']   !!}">  {!!  $options[$i]['name']   !!}
    </div>
    @endif
@endfor



<div class="form-group col-sm-6">
    <button type="submit" value="save" id="save" class="btn btn-block">{!! trans('public.send') !!}</button>
</div>
</div>
{!! Form::close() !!}
</div>
@push('scripts')
    @include( 'jquery.ajax')

    <script>
        jQuery(document).ready(function($)
        {

            $("#poll_wrap_toggle").click(function()
            {

                $("#poll_wrap").slideToggle( "slow");

                if ($("#poll_wrap_toggle").text() == "اظهار التصويت")
                {
                    $("#poll_wrap_toggle").html("اخفاء التصويت")
                }
                else
                {
                    $("#poll_wrap_toggle").text("اظهار التصويت")
                }

            });

        });
    </script>
@endpush