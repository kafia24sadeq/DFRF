@extends('layouts.master')
@section('pageheading', trans("public.feed"))

@section('content')

    {!! MetaTags( trans('public.feed') , '', ThemeHelper()."img/logo.png", "" , settings("websiteName")) !!}





    <table class="table table-striped table-bordered table-hover table-sm" dir="rtl">
        {{--<thead class="thead-inverse">--}}
        {{--<tr>--}}
        {{--<th>{!! trans('admin.ID') !!}</th>--}}
        {{--<th>{!! trans('admin.name') !!}</th>--}}
        {{--<th>{!! trans('admin.edit') !!}</th>--}}
        {{--<th>{!! trans('admin.status') !!}</th>--}}
        {{--<th>{!! trans('admin.number').' '.trans('admin.of').trans('admin.posts') !!}</th>--}}
        {{--</tr>--}}
        {{--</thead>--}}
        <tbody>

        <tr>
            <td>{!!    trans("public.allsections") !!} </td>
            <td><a target="_blank" href="{!! route("allrss") !!}"><img width="20px" height="20px" src="{!! ThemeHelper() !!}/img/rss.png" alt=""></a></td>
        </tr>
        <tr style="border-bottom: 2px solid #aaa">
            <td>{!!    trans("public.ads") !!} </td>
            <td><a target="_blank" href="{!! route("breakingrss") !!}"><img width="20px" height="20px" src="{!! ThemeHelper() !!}/img/rss.png" alt=""></a></td>
        </tr>
        @foreach ($categories as $element)
            <tr>
                <td>{!!    $element->name !!} </td>
                <td><a target="_blank" href="{!! route("sectionrss", $element->id) !!}"><img width="20px" height="20px" src="{!! ThemeHelper() !!}/img/rss.png" alt=""></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>



    <div class="node__content clearfix">

        <div property="schema:text" class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item"><p dir="rtl"><strong>ما هي خدمة RSS ؟</strong><br>خدمة خدمة RSS هي خدمة لمتابعة آخر الأخبار بشكل مباشر وبدون الحاجة إلى زيارة الموقع ، ستقدم لك خدمة RSS&nbsp; عنوان الخبر ، ومختصر لنص الخبر ، ووصلة أو رابط لنص الخبر الكامل على الموقع ، بالإضافة إلى عدد التعليقات الموجودة.<br><br><strong>على ماذا يدل RSS ؟</strong><br>هذا الإختصار يدل على Really Simple Syndication ، و هي تعني تلقيم مبسط جدا ، حيث يقوم الموقع بتلقيم الأخبار إلى عميل RSS مباشرة بدون تدخل من المستخدم ، مما يوفر الوقت والجهد.<br><br><strong>كيف يمكنني أن أشترك في خدمة RSS ؟</strong><br>يمكنك الإستفادة من خدمة RSS بعدة طرق سنذكر أهمها :<br><br>- عن طريق متصفح الإنترنت الذي تستخدمه يدعم تقنية RSS كمتصفح موزيلا فايرفوكس أو متصفح Opera أو متصفح إنترنت اكسبلورر 7.0 أو أحدث.<br><br>- عن طريق برنامج قراءة RSS خاص&nbsp; (RSS Reader) والذي بإمكانه قراءة وعرض الاخبار الجديدة الواردة عن طريق خدمة RSS .<br><br>هناك نوعين من القُراء - على الإنترنت و مكتبي .<br><br>قارئ الخلاصات على الإنترنت يتوجب عليك الاتصال المستمر بالويب ، ويجب عليك استخدام متصفح الويب للدخول على قارئ الخلاصات ومن ثم قراءتها. فائدة هذا النوع انه يمكنك العروج من جهاز كمبيوتر متصل بالإنترنت ، إذا كنت مستخدماً للعديد من الكمبيوترات (المكتب، المنزل، الجهاز المحمول، الخ) فيكون هذا إختيارك الأفضل . عموماً، يتطلب اتصالاً مستقراً ولذا ان كان اتصالك محدود بكمية او وقت فمن الأفضل لك ان تتوجه نحو النوع الثاني .<br><br>قارئ الخلاصات غير المتصل/المكتبي هو برنامج على جهاز الكمبيوتر ، يمكنك من تحديث الخلاصات عندما تكون متصلاً بالإنترنت ثم تقرأها لاحقاً سواء كنت متصلاً ام لا. الفائدة الجلية من هذا النوع توفير كمية الإتصال أو وقت الإنترنت. عيبه : لا يمكنك من استخدام العديد من اجهزة الكمبيوتر.<br><br><strong>مواقع ويب لقراءة تلقيمات RSS</strong></p>
            <ul><li>&nbsp;<a href="http://www.alarabilive.net/">العربي مباشر</a></li>
                <li>&nbsp;<a href="http://www.google.com/reader/">Google Reader</a></li>
                <li>&nbsp;<a href="http://www.bloglines.com/">Bloglines</a></li>
            </ul><p dir="rtl"><br><strong>&nbsp;برامج لقراءة تلقيمات RSS</strong><br><br>برامج تعمل على نظام ويندوز و لينكس و ماك أو أس العاشر</p>
            <ul><li><a href="http://www.rssowl.org/">&nbsp;RSSOwl</a></li>
            </ul><p dir="rtl"><br>برامج تعمل على نظام ويندوز و لينكس</p>
            <ul><li>&nbsp;<a href="http://www.disobey.com/amphetadesk/">AmphetaDesk</a></li>
                <li>&nbsp;<a href="http://come.to/project5/pears/">Pears</a></li>
                <li>&nbsp;<a href="http://rssview.sourceforge.net/">RSS Viewer</a></li>
            </ul><p dir="rtl"><br>برامج تعمل على نظام لينكس</p>
            <ul><li>&nbsp;<a href="http://liferea.sourceforge.net/">Liferea</a></li>
                <li>&nbsp;<a href="http://www.nongnu.org/straw/index.html">Straw</a></li>
                <li>&nbsp;<a href="http://akregator.sourceforge.net/">akregator</a></li>
            </ul><p dir="rtl"><br>برامج تعمل على نظام ويندوز</p>
            <ul><li>&nbsp;<a href="http://feedrader.com/">FeedReader</a></li>
                <li>&nbsp;<a href="http://www.newsgator.com/Individuals/FeedDemon/Default.aspx">FeedDemon</a></li>
            </ul><p dir="rtl"><br>برامج تعمل على نظام ماك أو أس العاشر</p>
            <ul><li>&nbsp;<a href="http://www.newsfirerss.com/">NewsFire</a></li>
                <li><a href="http://www.newsgator.com/Individuals/NetNewsWire/Default.aspx">&nbsp;NetNewsWire</a></li>
            </ul><p dir="rtl"><br><br><strong>كيف تشترك في RSS ؟</strong><br>انقر على أيقونة RSS في شريط العنوان في المتصفح ، أو في القائمة اليمنى للموقع ، سيأخذك إلى صفحة بها العديد من خيارات الإشتراك . بعض المتصفحات قد هُيأت ليستخدم كقارئ بمجرد النقر عليها يتم الإشتراك اتوماتيكياً. والأفضل هو نسخ الرابط بزر الفارة الأيمن ثم لصقه في “Add Feed” في خيارات القارئ .</p></div>

    </div>

@endsection
