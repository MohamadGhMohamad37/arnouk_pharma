<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\AboutUsArnoukPharma;
use Illuminate\Http\Request;

class StatckController extends Controller
{
    public function index(){
        return view('website.home.index');
    }

    public function arnoukPharma_about($lang){
        $about = AboutUsArnoukPharma::first();
        return view('website.arnouk_pharma.about.index', compact('about','lang'));
    }
}
