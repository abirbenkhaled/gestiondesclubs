<?php

namespace App\Http\Controllers\Admin;

use App\Adhrent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdhrentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.adhrent.index' ['adhrents', Adhrent::all()]);
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
     * @param  \App\Adhrent  $adhrent
     * @return \Illuminate\Http\Response
     */
    public function show(Adhrent $adhrent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Adhrent  $adhrent
     * @return \Illuminate\Http\Response
     */
    public function edit(Adhrent $adhrent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Adhrent  $adhrent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adhrent $adhrent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Adhrent  $adhrent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adhrent $adhrent)
    {
        //
    }
}
