<?php

namespace App\Http\Controllers;

use App\Models\Investigation_Tag;
use Illuminate\Http\Request;

class InvestigationTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investigationstags = Investigation_Tag::all();
        return view('investigationstags/index',compact("investigationstags"));
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
     * @param  \App\Models\Investigation_Tag  $investigation_Tag
     * @return \Illuminate\Http\Response
     */
    public function show(Investigation_Tag $investigation_Tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Investigation_Tag  $investigation_Tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Investigation_Tag $investigation_Tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Investigation_Tag  $investigation_Tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Investigation_Tag $investigation_Tag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Investigation_Tag  $investigation_Tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Investigation_Tag $investigation_Tag)
    {
        //
    }
}
