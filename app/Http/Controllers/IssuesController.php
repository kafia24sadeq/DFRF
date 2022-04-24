<?php

namespace Systems\Http\Controllers;

use Illuminate\Http\Request;
use Systems\Page;
class IssuesController extends Controller
{
    
    public function issues_one()
    {
     
        $deathpenalty=Page::findOrFail(15);
        return view('Issues.deathpenalty', compact('deathpenalty'));
    }

    public function issues_two()
    {
     
        $guant=Page::findOrFail(16);
        return view('Issues.guant', compact('guant'));
    }

    public function issues_three()
    {
     
        $drone=Page::findOrFail(17);
        return view('Issues.drone', compact('drone'));
    }

   
    public function issues_four()
    {
     
        $tor=Page::findOrFail(18);
        return view('Issues.tor', compact('tor'));
    }


    public function issues_fifteen()
    {
     
        $unlaw=Page::findOrFail(19);
        return view('Issues.unlaw', compact('unlaw'));
    }

   
}
