<?php

namespace App\Http\Controllers;

use App\Models\bg_banner;
use App\Http\Requests\Storebg_bannerRequest;
use App\Http\Requests\Updatebg_bannerRequest;

class BgBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Storebg_bannerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(bg_banner $bg_banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bg_banner $bg_banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatebg_bannerRequest $request, bg_banner $bg_banner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bg_banner $bg_banner)
    {
        //
    }
    public function addbigbanner(){
        $allProducts = Product::all();
        return view('pages.vendor.myaddProduct', ['bg_banners' => $bg_banners]);
        // return $allProducts;
    }
}
