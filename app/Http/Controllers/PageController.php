<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function pricing()
    {
        return view('pricing');
    }

    public function profile()
    {
        return view('profile');
    }

    public function mybb()
    {
        return view('plugins/mybb');
    }

    public function phpbb()
    {
        return view('plugins/phpbb');
    }

    public function shopify()
    {
        return view('plugins/shopify');
    }

    public function prestashop()
    {
        return view('plugins/prestashop');
    }

    public function wordpress()
    {
        return view('plugins/wordpress');
    }

    public function terms()
    {
        return view('terms');
    }

    public function policy ()
    {
        return view('policy');
    }
}
