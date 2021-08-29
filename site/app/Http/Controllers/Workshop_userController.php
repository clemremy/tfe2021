<?php

namespace App\Http\Controllers;

use App\Models\Workshop_user;
use App\Models\User;
use App\Models\Workshop;
use Illuminate\Http\Request;
use Auth;

class Workshop_userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user() &&  Auth::user()->role == 'admin') {
            $workshop_users = Workshop_user::all();
            return view('workshop_users.list', ['workshop_users'=> $workshop_users]);
        } 
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $workshop_users = Workshop_user::all();
        $workshops = Workshop::all();
        $users = User::all();
        return view('workshops.list', ['workshops'=>$workshops, 'users'=>$users]);
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

        // Créer ou récup l'utilisateur 
        $user = User::where("email", $request->email)->first();
        if ( ! $user ){
            // Méthode store de UserController
            $user = new User();
            $user->first_name = $request->has('first_name') && strlen($request->first_name) ? $request->first_name : 'Pas de prénom';
            $user->last_name = $request->has('last_name') && strlen($request->last_name) ? $request->last_name : 'Pas de nom';
            $user->email = $request->has('email') && strlen($request->email) ? $request->email : 'Pas d\'email';
            $user->role = $request->has('role') && strlen($request->role) ? $request->role : 'user';
            $user->newsletter = $request->has('newsletter') && strlen($request->newsletter) ? $request->newsletter : '0';
            $user->account = $request->has('account') && strlen($request->account) ? $request->account : '1';
            $user->gdpr = $request->has('gdpr') && strlen($request->gdpr) ? $request->gdpr : '1';
            $user->terms = $request->has('terms') && strlen($request->terms) ? $request->terms : '1';
            $user->password = $request->has('password') && strlen($request->password) ? $request->password : 'pasdemdp';
            $user->save();
        }
        $workshop_user->nb_persons = $request->has('nb_persons') && strlen($request->nb_persons) ? $request->nb_persons : '1';
        $workshop_user->paid = $request->has('paid') && strlen($request->paid) ? $request->paid : '0';

        // associer l'utilisateur
        $user = User::where("email", $request->email)->first();
        if($user) {
            $workshop_user->user()->associate($user);
        }
       
        
        // associer le workshop
        $workshop = Workshop::find($request->workshop_id);
        if($workshop) {
            $workshop_user->workshop()->associate($workshop);
        }

        $workshop_user->save();
        return redirect('/ateliers');
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
    public function update(Request $request, $id)
    {
        $workshop_user = Workshop_user::find($id);
        $workshop_user->user_id = $request->has('user_id') && strlen($request->user_id) ? $request->user_id : $workshop_user->user_id;
        $workshop_user->workshop_id = $request->has('workshop_id') && strlen($request->workshop_id) ? $request->workshop_id : $workshop_user->workshop_id;
        $workshop_user->nb_persons = $request->has('nb_persons') && strlen($request->nb_persons) ? $request->nb_persons : $workshop_user->nb_persons;
        $workshop_user->paid = $request->has('paid') && strlen($request->paid) ? $request->paid : $workshop_user->paid;

        $workshop_user->save();
        
        return redirect('/inscription');
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
