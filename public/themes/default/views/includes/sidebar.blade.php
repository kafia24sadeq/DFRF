@include("includes.search")

<div class="ads_widgets">
    {!! $sidebar_top !!}
</div>

@widget('ArticleWidhet')
@widget('AdvertismentWidget')
{{--@widget('MostRead')--}}
@widget('RecentNewsWdgit')
@widget('Socials')
@widget('PdfWidget')
{!! $sidebar_down !!}
