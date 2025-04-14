<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardConroller extends Controller
{
    public function index($lang){
        return view('admin.home.index');
    }
}
