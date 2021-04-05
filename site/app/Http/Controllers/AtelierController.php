<?php

namespace App\Http\Controllers;

use App\Models\Atelier;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class AtelierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ateliers = Atelier::all();
        return view('ateliers.list', ['ateliers'=> $ateliers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $utilisateurs = Utilisateur::all();
        return view('ateliers.form', ['utilisateurs'=>$utilisateurs]);
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
     * @param  \App\Models\Atelier  $atelier
     * @return \Illuminate\Http\Response
     */
    public function show(Atelier $atelier)
    {
        return view('ateliers.one', ['ateliers'=>$atelier]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Atelier  $atelier
     * @return \Illuminate\Http\Response
     */
    public function edit(Atelier $atelier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Atelier  $atelier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Atelier $atelier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Atelier  $atelier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atelier $atelier)
    {
        //
    }
}
