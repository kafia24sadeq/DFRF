<?xml version="1.0" encoding="utf-8"?>
<rss version="2.0"
     xmlns:atom="http://www.w3.org/2005/Atom"
     xmlns:media="http://search.yahoo.com/mrss/"
     xmlns:dc="http://purl.org/dc/elements/1.1/"
>
    <channel>
        <title>{!! settings("websiteName") !!}  {!! $cat !!}</title>
        <link>{!! URL::to('/') !!}</link>
        <description>{!!  excerptHelper(settings("metaDescription"),150,'')!!}</description>

        @foreach($posts as $post)

            <item>
                <title>{!! RemoveEntity($post->title) !!}</title>
                <link>{!! URL::to('/') !!}</link>
                <pubDate>{!! date('r', strtotime($post->created_at)) !!}</pubDate>
                <guid>{!! URL::to('/') !!}</guid>
            </item>
        @endforeach


    </channel>

</rss>