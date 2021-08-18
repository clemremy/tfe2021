<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use App\Models\User;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workshops = Workshop::all();
        return view('workshops.list', ['workshops'=> $workshops]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $workshops = Workshop::all();
        return view('workshops.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $workshop = new Workshop();
        $workshop->name = $request->has('name') && strlen($request->name) ? $request->name : 'Pas de nom';
        $workshop->description = $request->has('description') && strlen($request->description) ? $request->description : 'Pas de description';
        $workshop->start_date = date('Y-m-d', strtotime($request->start_date)) ? $request->start_date : null;
        $workshop->end_date = date('Y-m-d', strtotime($request->end_date)) ? $request->end_date : null;
        $workshop->nb_places = $request->has('nb_places') && strlen($request->nb_places) ? $request->nb_places : 'Pas de nombre de places';
        $workshop->price = $request->has('price') && strlen($request->price) ? $request->price : 'Pas de prix';
        //$workshop->active = intval($request->active) ? $request->active : 0;
        $workshop->active = $request->has('active') && strlen($request->active) ? $request->active : '0';

        $workshop->save();

        return redirect('/ateliers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function show(Workshop $workshop)
    {
        return view('workshops.one', ['workshop'=>$workshop]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $workshop = Workshop::find($id);
        return view('workshops.edit', ['workshop'=>$workshop]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $workshop = Workshop::find($id);
        $workshop->name = $request->has('name') && strlen($request->name) ? $request->name : $workshop->name;
        $workshop->description = $request->has('description') && strlen($request->description) ? $request->description : $workshop->description;
        $workshop->start_date = date('Y-m-d', strtotime($request->start_date)) ? $request->start_date : $workshop->start_date;
        $workshop->end_date = date('Y-m-d', strtotime($request->end_date)) ? $request->end_date : $workshop->end_date;
        $workshop->nb_places = $request->has('nb_places') && strlen($request->nb_places) ? $request->nb_places : $workshop->nb_places;
        $workshop->price = $request->has('price') && strlen($request->price) ? $request->price : $workshop->price;
        //$workshop->active = intval($request->active) ? $request->active : $workshop->active;
        $workshop->active = $request->has('active') && strlen($request->active) ? $request->active : $workshop->active;

        $workshop->save();
        
       return redirect('/ateliers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $workshop = Workshop::find($id);
        $workshop->delete();
        return redirect('/ateliers')->with('delete', 'Cet atelier a été supprimé avec succès!');
    }
}
