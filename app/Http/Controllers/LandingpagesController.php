<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\SysVars;

class LandingpagesController extends Controller
{
    var $themes;
    public function __construct()
    {
        $this->themes = SysVars::find('themes');
    }

    public function index(Request $req)
    {
        return view('landing.'.$this->themes['val'].'.contents.content');
    }
}
