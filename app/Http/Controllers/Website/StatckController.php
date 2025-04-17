<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\AboutUsArnoukPharma;
use App\Models\ProductArnoukPharma;
use App\Models\ServiceArnoukPharma;
use Illuminate\Http\Request;

class StatckController extends Controller
{
    public function index(){
        return view('website.home.index');
    }

    public function arnoukPharma_about($lang){
        $about = AboutUsArnoukPharma::first();
        return view('website.arnouk_pharma.about.about', compact('about','lang'));
    }
    public function arnoukPharma_services($lang){
        $services = ServiceArnoukPharma::all();
        return view('website.arnouk_pharma.service.service', compact('services','lang'));
    }
    public function arnoukPharma_products($lang){
        $products = ProductArnoukPharma::all();
        return view('website.arnouk_pharma.product.product', compact('products','lang'));
    }
}
