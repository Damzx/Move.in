<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home(){
        return view('pages.welcomePage');
    }

    public function index(){
        return view('pages.homePage');
    }
}
