<?php

namespace Systems\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Systems\Http\Requests;
use Systems\Http\Controllers\Controller;
use Systems\Events\SomeEvent;

use Systems\Setting;



use Systems\Http\Requests\SettingsFromRequest;


class SettingsController extends Controller
{
    public function index(){


        $settings = [
            'websiteName' => settings('websiteName') ,
            'facebook' => settings('facebook') ,
            'twitter' => settings('twitter') ,
            'google' => settings('google') ,
            'youtube' => settings('youtube') ,
            'whatsapp' => settings('whatsapp') ,
            'telegram' => settings('telegram') ,
            'instagram' => settings('instagram') ,


            'analytics' => settings('analytics') ,
            'metaDescription' => settings('metaDescription') ,
            'metaKeywors' => settings('metaKeywors') ,

            'gWebmaster' => settings('gWebmaster') ,
            'bing' => settings('bing') ,
            'facebookCode' => settings('facebookCode') ,
            'other' => settings('other') ,
        ];

        return view('admin.settings.index' ,compact('settings'));
    }


    public function store(SettingsFromRequest $request){

        settings([
                'websiteName' => $request->websiteName,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'google' => $request->google,
                'youtube' => $request->youtube,
                'whatsapp' => $request->whatsapp,
                'telegram' => $request->telegram,
                'instagram' => $request->instagram,
                'analytics' => $request->analytics,
                'metaDescription' => $request->metaDescription ,
                'metaKeywors' => $request->metaKeywors,
                'bing' => $request->bing,
                'facebookCode' => $request->facebookCode,
                'other' => $request->other,

            ]
        );

        event(new SomeEvent(['desc'=> '']));
        return 'true';

    }
}
