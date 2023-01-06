<?php

namespace App\Http\Controllers\Admin;

use App\Models\SiteDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Yajra\DataTables\Contracts\DataTable;
use Yajra\DataTables\Facades\DataTables;


class SiteDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\SiteDetail  $siteDetail
     * @return \Illuminate\Http\Response
     */
    public function show(SiteDetail $siteDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SiteDetail  $siteDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteDetail $siteDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SiteDetail  $siteDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiteDetail $siteDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SiteDetail  $siteDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiteDetail $siteDetail)
    {
        //
    }
}
