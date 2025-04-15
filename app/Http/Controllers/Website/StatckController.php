<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatckController extends Controller
{
    public function index(){
        return view('website.home.index');
    }

    public function arnoukPharma_about(){
        return view('website.arnouk_pharma.about.index');
    }
}
