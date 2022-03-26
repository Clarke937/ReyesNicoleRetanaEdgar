<?php

namespace App\Http\Controllers;

use App\Models\Investigations;
use Illuminate\Http\Request;

class InvestigationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investigations = Investigations::all();
        return view('investigations/index',compact("investigations"));
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
     * @param  \App\Models\Investigations  $investigations
     * @return \Illuminate\Http\Response
     */
    public function show(Investigations $investigations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Investigations  $investigations
     * @return \Illuminate\Http\Response
     */
    public function edit(Investigations $investigations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Investigations  $investigations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Investigations $investigations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Investigations  $investigations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Investigations $investigations)
    {
        //
    }
}
