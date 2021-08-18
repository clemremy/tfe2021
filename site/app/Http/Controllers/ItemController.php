<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        //$items = Item::latest()->paginate(3);
        return view('items.list', ['items'=> $items]);
            //->with('i', (request()->input('page', 1) - 1) * 3);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Item::all();
        return view('items.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Item();
        $item->name = $request->has('name') && strlen($request->name) ? $request->name : 'Pas de nom';
        $item->description = $request->has('description') && strlen($request->description) ? $request->description : 'Pas de description';
        $item->price = $request->has('price') && strlen($request->price) ? $request->price : 'Pas de prix';
        $item->image = $request->has('image') && strlen($request->image) ? $request->image : 'none';
        $item->amount = $request->has('amount') && strlen($request->amount) ? $request->amount : 'Pas de quantité';
        $item->customization = $request->has('customization') && strlen($request->customization) ? $request->customization : 'Pas de personnalisation';
        $item->categories_id = intval($request->categories_id) ? $request->categories_id : '';
        $item->active = intval($request->active) ? $request->active : '';
        $item->active = $request->has('active') && strlen($request->active) ? $request->active : '0';

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        
        $item->save();

        return redirect('/mobilier');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('items.one', ['item'=>$item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::find($id);
        return view('items.edit', ['item'=>$item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Item::find($id);
        $item->name = $request->has('name') && strlen($request->name) ? $request->name : $item->name;
        $item->description = $request->has('description') && strlen($request->description) ? $request->description : $item->description;
        $item->price = $request->has('price') && strlen($request->price) ? $request->price : $item->price;
        $item->amount = $request->has('amount') && strlen($request->amount) ? $request->amount : $item->amount;
        $item->customization = $request->has('customization') && strlen($request->customization) ? $request->customization : $item->customization;
        $item->categories_id = intval($request->categories_id) ? $request->categories_id : $item->categories_id;
        //$item->active = intval($request->active) ? $request->active : $item->active;
        $item->active = $request->has('active') && strlen($request->active) ? $request->active : $item->active;
        
        $item->save();
        
       return redirect('/mobilier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();
        return redirect('/mobilier')->with('delete', 'Cet article a été supprimé avec succès!');
    }
}
