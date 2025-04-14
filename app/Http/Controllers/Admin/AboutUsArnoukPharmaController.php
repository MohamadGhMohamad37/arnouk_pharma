<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\AboutUsArnoukPharma;
class AboutUsArnoukPharmaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($lang)
    {
        $abouts = AboutUsArnoukPharma::all()->map(function ($item) use ($lang) {
            $item->name = $item["name_{$lang}"];
            $item->description = $item["description_{$lang}"];
            return $item;
        });
        return view('admin.arnouk_pharma.about.index',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
