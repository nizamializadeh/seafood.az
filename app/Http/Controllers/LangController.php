<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
    public function index($lang){
        if (array_key_exists($lang, Config::get('lang'))) {
            Session::put('applocale', $lang);
        }
        return back();
    }
}
