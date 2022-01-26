<?php

namespace App\Http\Controllers;

use App\Models\Renseignement;
use App\Http\Requests\StoreRenseignementRequest;
use App\Http\Requests\UpdateRenseignementRequest;

class RenseignementController extends Controller
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
     * @param  \App\Http\Requests\StoreRenseignementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRenseignementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Renseignement  $renseignement
     * @return \Illuminate\Http\Response
     */
    public function show(Renseignement $renseignement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Renseignement  $renseignement
     * @return \Illuminate\Http\Response
     */
    public function edit(Renseignement $renseignement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRenseignementRequest  $request
     * @param  \App\Models\Renseignement  $renseignement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRenseignementRequest $request, Renseignement $renseignement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Renseignement  $renseignement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Renseignement $renseignement)
    {
        //
    }
}
