<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user() &&  Auth::user()->role == 'admin') {
            $users = User::all();
            return view('users.list', ['users'=> $users]);
        } 
        return view('auth.login');
    }
    

    public function indexProfil()
    {
        return view('profil.list', ['users'=> $users]);
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
        /*
        $user->newsletter = $request->has('newsletter') && strlen($request->newsletter) ? $request->newsletter : '0';
        $user->gdpr = $request->has('gdpr') && strlen($request->gdpr) ? $request->gdpr : '0';
        $user->terms = $request->has('terms') && strlen($request->terms) ? $request->terms : '0';
        $user->save();
        return redirect('/');
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.one', ['user'=>$user]);
    }
    public function showprofil(User $user)
    {   
        $user = auth()->user();
        $id = auth()->id();
        return view('profil.one', ['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', ['user'=>$user]);
    }

    public function editProfil(User $user)
    {
        //$user = User::find($id);
        //return view('profil.edit', ['user'=>$user]);
        $user = auth()->user();
        $id = auth()->id();
        return view('profil.edit', ['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->first_name = $request->has('first_name') && strlen($request->first_name) ? $request->first_name : $user->first_name;
        $user->last_name = $request->has('last_name') && strlen($request->last_name) ? $request->last_name : $user->last_name;
        $user->email = $request->has('email') && strlen($request->email) ? $request->email : $user->email;
        $user->role = $request->has('role') && strlen($request->role) ? $request->role : $user->role;

        $user->save();
        
       return redirect('/utilisateurs');
    }

    public function updateprofil(Request $request, User $user)
    {
        $user = auth()->user();
        $id = auth()->id();
        $user->first_name = $request->has('first_name') && strlen($request->first_name) ? $request->first_name : $user->first_name;
        $user->last_name = $request->has('last_name') && strlen($request->last_name) ? $request->last_name : $user->last_name;
        $user->email = $request->has('email') && strlen($request->email) ? $request->email : $user->email;
        $user->role = $request->has('role') && strlen($request->role) ? $request->role : $user->role;
        
        $user->save();
        
        return redirect('/profil');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/utilisateurs');
    }
}
