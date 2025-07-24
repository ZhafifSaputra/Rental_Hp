<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    // Android
    function infinix()
    {
        return view('Android.infinix');
    }
    function oppo()
    {
        return view('Android.oppo');
    }

    function realme()
    {
        return view('Android.realme');
    }

    function samsung()
    {
        return view('Android.samsung');
    }

    function vivo()
    {
        return view('Android.vivo');
    }

    function xiomi()
    {
        return view('Android.xiomi');
    }



    // Iphone
    function iphone13()
    {
        return view('iphone.13');
    }

    function iphone15()
    {
        return view('iphone.15');
    }

    function iphone15plus()
    {
        return view('iphone.15plus');
    }

    function iphone15pro()
    {
        return view('iphone.15pro');
    }

    function iphone15promax()
    {
        return view('iphone.15promax');
    }

    function iphonexr()
    {
        return view('iphone.xr');
    }


    // Gaming
    function black_shark()
    {
        return view('gaming.black_shark');
    }

    function gt5pro()
    {
        return view('gaming.gt5pro');
    }

    function gt20pro()
    {
        return view('gaming.gt20pro');
    }

    function iqoo13()
    {
        return view('gaming.iqoo13');
    }

    function rog()
    {
        return view('gaming.rog');
    }

    function zte()
    {
        return view('gaming.zte');
    }
}
