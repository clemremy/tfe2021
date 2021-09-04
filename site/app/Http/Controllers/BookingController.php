<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Item;
use Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user() &&  Auth::user()->role == 'admin') {
            $bookings = Booking::all();
            return view('bookings.list', ['bookings'=> $bookings]);
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
        $bookings = Booking::all();
        $items = Item::all();
        $users = User::all();
        return view('items.list', ['items'=>$items, 'users'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $booking = new Booking();

        $booking->advance = $request->has('advance') && strlen($request->advance) ? $request->advance : '0';
        $booking->paid = $request->has('paid') && strlen($request->paid) ? $request->paid : '0';

        // associer l'utilisateur
        $user = User::where("email", $request->email)->first();
        if($user) {
            $booking->user()->associate($user);
        }
        
        // associer l'article
        $item = Item::find($request->item_id);
        if($item) {
            $booking->item()->associate($item);
        }

        $booking->save();
        return redirect('/mobilier');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        return view('bookings.one', ['booking'=>$booking]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booking = Booking::find($id);
        return view('bookings.edit', ['booking'=>$booking]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $booking = Booking::find($id);
        $booking->user_id = $request->has('user_id') && strlen($request->user_id) ? $request->user_id : $booking->user_id;
        $booking->item_id = $request->has('item_id') && strlen($request->item_id) ? $request->item_id : $booking->item_id;
        $booking->advance = $request->has('advance') && strlen($request->advance) ? $request->advance : $booking->advance;
        $booking->paid = $request->has('paid') && strlen($request->paid) ? $request->paid : $booking->paid;

        $booking->save();
        return redirect('/reservation')->with('update', 'La réservation ' . $booking->id . ' a été modifiée !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking = Booking::find($id);
        $booking->delete();
        return redirect('/reservation')->with('delete', 'La réservation ' . $booking->id . ' a été supprimée !');
    }
}
