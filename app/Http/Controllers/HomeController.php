<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function GetIndex()
    {

        $componets = Helper::componets();

        $errorPageData = Helper::errorPage();

        $slug = ["homepage-20220929", "productpage-3660077869", "catalogpage"];

        $Url = request()->segments()[0];

        $checkSlug = in_array(request()->segments()[0], $slug);

        if ($checkSlug) {
            $funCall = (explode('-', $Url))[0];
            $homeDatas = Helper::$funCall();
            return view('home', compact('componets', 'homeDatas', 'Url'));
        } else {
            return view('errors.404', compact('componets', 'errorPageData'));
        }
    }
    public function index()
    {
        $allPageData = ["404-error-page" => Helper::errorPage(), "homepage-20220929" => Helper::homepage(), "productpage-3660077869" => Helper::productpage(), "catalogpage" => Helper::catalogpage()];

        $componets = Helper::componets();

        return view('index', compact('allPageData', 'componets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(home $home)
    {
        //
    }

}
