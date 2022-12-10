<?php

namespace App\Http\Controllers;

use App\Models\CookiesPolicy;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CookiesPolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = CookiesPolicy::first();
        return view('backend.pages.cookies_policy', compact('data'));
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
     * @param  \App\Models\CookiesPolicy  $cookiesPolicy
     * @return \Illuminate\Http\Response
     */
    public function show(CookiesPolicy $cookiesPolicy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CookiesPolicy  $cookiesPolicy
     * @return \Illuminate\Http\Response
     */
    public function edit(CookiesPolicy $cookiesPolicy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CookiesPolicy  $cookiesPolicy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cookiesPolicy)
    {
        CookiesPolicy::find($cookiesPolicy)->update([
            'description' => $request->description,
            'updated_at' => Carbon::now(),
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CookiesPolicy  $cookiesPolicy
     * @return \Illuminate\Http\Response
     */
    public function destroy(CookiesPolicy $cookiesPolicy)
    {
        //
    }
}
