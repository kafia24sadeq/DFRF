<div class="share-icons hidden-xs" role="navigation" style="">
    <div class="" style="margin-top: 10px;">
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        {{--<div class="addthis_inline_share_toolbox_0zva"></div>--}}
        <div class="row">
            <div class="share-social-icons" >
                <ul class="social-icons">
                    <li>
                        <a target="_blank" href="http://www.facebook.com/sharer/sharer.php?u={!! $product->name !!}.{!! settings("websiteName") !!}" class="social-icon"> <i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="https://twitter.com/intent/tweet?hashtags='.$hashtags.'&amp;text={!! Request::url() !!}.{!! $product->name !!}.{!! settings("websiteName") !!}" class="social-icon"> <i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="whatsapp://send?text={!! $product->name !!}.{!! settings("websiteName") !!}.{!! Request::url() !!}" class="social-icon"> <i class="fa fa-whatsapp"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="https://telegram.me/share/url?url={!! $product->name !!}.{!! settings("websiteName") !!}.{!! Request::url() !!}" class="social-icon"> <i class="fa fa-telegram"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="mailto:?subject={!! $product->name !!}&body={!! $product->name !!}.{!! settings("websiteName") !!}.{!! Request::url() !!}" class="social-icon"> <i class="fa fa-envelope"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="{!! route( 'print' , $product->id) !!}" class="social-icon"><i class="fa fa-print"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="https://plus.google.com/share?url={!! Request::url() !!}.{!! $product->name !!}.{!! settings("websiteName") !!}" class="social-icon"> <i class="fa fa-google-plus"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <style>

    </style>
</div>

<div class="share-icons-mobile hidden-lg hidden-md" role="navigation" style="">
    <div class="" style="margin-top: 10px;">
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        {{--<div class="addthis_inline_share_toolbox_0zva"></div>--}}
        <div class="row">
            <div class="share-social-icons" >
                <ul class="social-icons">
                    <li>
                        <a target="_blank" href="http://www.facebook.com/sharer/sharer.php?u={!! $product->name !!}.{!! settings("websiteName") !!}" class="social-icon"> <i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="https://twitter.com/intent/tweet?hashtags='.$hashtags.'&amp;text={!! Request::url() !!}.{!! $product->name !!}.{!! settings("websiteName") !!}" class="social-icon"> <i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="whatsapp://send?text={!! $product->name !!}.{!! settings("websiteName") !!}.{!! Request::url() !!}" class="social-icon"> <i class="fa fa-whatsapp"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="https://telegram.me/share/url?url={!! $product->name !!}.{!! settings("websiteName") !!}.{!! Request::url() !!}" class="social-icon"> <i class="fa fa-telegram"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="mailto:?subject={!! $product->name !!}&body={!! $product->name !!}.{!! settings("websiteName") !!}.{!! Request::url() !!}" class="social-icon"> <i class="fa fa-envelope"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="{!! route( 'print' , $product->id) !!}" class="social-icon"><i class="fa fa-print"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="https://plus.google.com/share?url={!! Request::url() !!}.{!! $product->name !!}.{!! settings("websiteName") !!}" class="social-icon"> <i class="fa fa-google-plus"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <style>

    </style>
</div>
