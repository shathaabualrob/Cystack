<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('Pages.index');
    }
    public function result(){
        return view('Pages.result');
    }
}
