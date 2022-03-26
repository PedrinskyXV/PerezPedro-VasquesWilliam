<?php

namespace App\Http\Controllers;

use App\Models\subsidiary;
use App\Http\Requests\StoresubsidiaryRequest;
use App\Http\Requests\UpdatesubsidiaryRequest;

class SubsidiaryController extends Controller
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
     * @param  \App\Http\Requests\StoresubsidiaryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresubsidiaryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\subsidiary  $subsidiary
     * @return \Illuminate\Http\Response
     */
    public function show(subsidiary $subsidiary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subsidiary  $subsidiary
     * @return \Illuminate\Http\Response
     */
    public function edit(subsidiary $subsidiary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesubsidiaryRequest  $request
     * @param  \App\Models\subsidiary  $subsidiary
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesubsidiaryRequest $request, subsidiary $subsidiary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subsidiary  $subsidiary
     * @return \Illuminate\Http\Response
     */
    public function destroy(subsidiary $subsidiary)
    {
        //
    }
}
