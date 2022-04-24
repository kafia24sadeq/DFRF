<?php

namespace Systems\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Analytics;
use Systems\Category;
use Systems\Post;
use Systems\User;


class StatisticsWidget extends AbstractWidget
{
    public $cacheTime = 15;

    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];



    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $visitorsAndPageViews =  Analytics::fetchTotalVisitorsAndPageViews(\Spatie\Analytics\Period::days(1));
        $visitorsAndPageViews = $analyticsData2 =  json_decode($visitorsAndPageViews, true);
        $analyticsData =  Analytics::fetchCountru(\Spatie\Analytics\Period::days(1), 10);
        $analyticsData = $analyticsData2 =  json_decode($analyticsData, true);
        $country ="";

        foreach ($analyticsData as $value){

            $country[]=  " ['".$value['country']."'  , ".$value['pageviews']." ]";
        }
        $country = implode("," , $country);



        $analyticsData = Analytics::fetchTopReferrers(\Spatie\Analytics\Period::days(1), 10);
        $analyticsData =   json_decode($analyticsData, true);
        $country2 ="";
        $Referrers = $analyticsData;


        foreach ($analyticsData as $value){

            $country2[]=  " ['".$value['url']."'  , ".$value['pageViews']." ]";
        }
//            $Referrers = implode("," , $country2);

//        $newsNumber = Post::news()->where("created_at", ">", \Carbon\Carbon::today())->count();
        $newsNumberYes = Post::news()->where("created_at", "<", \Carbon\Carbon::today())->where('created_at',">" , \Carbon\Carbon::yesterday())->count();
//        $articlesNumber = Post::articles()->where("created_at", ">", \Carbon\Carbon::today())->count();
        $articlesNumberYes = Post::articles()->where("created_at", "<", \Carbon\Carbon::today())->where('created_at',">" , \Carbon\Carbon::yesterday())->count();


        $posts =  Category::with(['posts' => function($query)
        {
            $query->where("created_at", ">", \Carbon\Carbon::today()->subDay());


        }])->get()->toArray();
        $names="";
        $counts="";

        foreach ($posts as $cat){
            $names .=  " ' ".$cat['name']." ' ,";
            $counts .=  " ".count($cat['posts'])." ,";
        }



        $posts =  User::with(['posts' => function($query)
        {
            $query->where("created_at", ">", \Carbon\Carbon::today()->subDay());


        }])->get()->toArray();
        $user="";
        $counts_user="";

        foreach ($posts as $cat){
            $user .=  " ' ".$cat['name']." ' ,";
            $counts_user .=  " ".count($cat['posts'])." ,";
        }





        return view("widgets.statistics_widget", [
            'config' => $this->config,'newsNumberYes' => $newsNumberYes,'articlesNumberYes' => $articlesNumberYes, "visitorsAndPageViews" => $visitorsAndPageViews ,"newsNumber" => $newsNumber ,"Referrers" => $Referrers ,"analyticsData2" => $analyticsData2 , "country" => $country ,"Referrers" => $Referrers ,"articlesNumber" => $articlesNumber , 'names' =>$names , "counts" => $counts , 'user'=>$user , "counts_user"=>$counts_user

        ]);
    }
}