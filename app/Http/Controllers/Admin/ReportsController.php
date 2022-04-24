<?php

namespace Systems\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Systems\Http\Requests;
use Systems\Http\Controllers\Controller;
use Systems\Post;
use Analytics;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $visitorsAndPageViews =  Analytics::fetchTotalVisitorsAndPageViews(\Spatie\Analytics\Period::days(30));
        $visites = "";
        $pageviews = "";
        $dates = "";
        foreach ($visitorsAndPageViews as $cat){
            $dates .=  " ' ".date_format( $cat['date'], "j" )." ' ,";
            $visites .=  $cat['pageViews']." ,";
            $pageviews .=  $cat['visitors']." ,";
        }


        $fetchTopBrowsers =  Analytics::fetchTopBrowsers(\Spatie\Analytics\Period::days(30));
        $browser = "";
        $browserSessions = "";
        foreach ($fetchTopBrowsers as $cat){
            $browser .=  " ' " .$cat['browser']."' ,";
            $browserSessions .=  $cat['sessions']." ,";
        }


        $fetchTopOperatingSystem =  Analytics::fetchTopOperatingSystem(\Spatie\Analytics\Period::days(30));
        $system = "";
        $systemSessions = "";
        foreach ($fetchTopOperatingSystem as $cat){
            $system .=  " ' " .$cat['operatingSystem']."' ,";
            $systemSessions .=  $cat['sessions']." ,";
        }


        $fetchTopKeyword =  Analytics::fetchTopKeyword(\Spatie\Analytics\Period::days(30));
        $keyword = "";
        $keywordSessions = "";
        foreach ($fetchTopKeyword as $cat){
            $keyword .=  " ' " .$cat['keyword']."' ,";
            $keywordSessions .=  $cat['sessions']." ,";
        }

        $today = Post::news()->where("date", ">", \Carbon\Carbon::today()->subDay())->take(20)->orderby("count", "desc")->get();
        $week = Post::news()->where("date", ">", \Carbon\Carbon::today()->subWeek())->take(20)->orderby("count", "desc")->get();
        $month = Post::news()->where("date", ">", \Carbon\Carbon::today()->subMonth())->take(20)->orderby("count", "desc")->get();
        $alltime = Post::news()->take(20)->orderby("count", "desc")->get();
        return view("admin.reports.index", compact("today" , "keyword", "keywordSessions", "system", "systemSessions", "browserSessions" , "browser", "pageviews", "visites", "dates",  "week" , "month" , "alltime"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
