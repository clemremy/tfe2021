<?php

namespace App\Http\Controllers;

use App\Models\Workshop_user;
use Illuminate\Http\Request;

class Workshop_userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workshop_users = Workshop_user::all();
        return view('workshop_users.list', ['workshop_users'=> $workshop_users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $workshop_users = Workshop_user::all();
        return view('workshops.list');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $workshop_user = new Workshop_user();
        $workshop_user->name = $request->has('name') && strlen($request->name) ? $request->name : 'Pas de nom';
        $workshop_user->first_name = $request->has('first_name') && strlen($request->first_name) ? $request->first_name : 'Pas de prénom';
        
        $workshop_user->save();

        return redirect('/inscription');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Workshop_user  $workshop_user
     * @return \Illuminate\Http\Response
     */
    public function show(Workshop_user $workshop_user)
    {
        return view('workshop_users.one', ['workshop_user'=>$workshop_user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Workshop_user  $workshop_user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $workshop_user = Workshop_user::find($id);
        return view('workshop_users.edit', ['workshop_user'=>$workshop_user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Workshop_user  $workshop_user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workshop_user $workshop_user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Workshop_user  $workshop_user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $workshop_user = Workshop_user::find($id);
        $workshop_user->delete();
        return redirect('/inscription')->with('delete', 'Cette inscription a été supprimée avec succès!');
    }
}
