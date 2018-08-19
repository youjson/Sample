<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class StaticPagesController extends Controller
{
    //显示静态主页
    public function home()
    {
        $feed_items = [];
        if (Auth::check()) {
            $feed_items = Auth::user()->feed()->paginate(20);
        }
        return view('static_pages/home', compact('feed_items'));
    }

    //显示静态帮助页
    public function help()
    {
        return view('static_pages/help');
    }

    //显示静态关于页
    public function about()
    {
        return view('static_pages/about');
    }
}
