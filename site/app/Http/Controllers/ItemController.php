<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;
use Exception;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::orderBy('id', 'desc')->get();
        return view('items.list', ['items'=> $items]);
    }

    public function indexdeux()
    {
        //$items = Item::all();
        $items = Item::orderBy('id', 'desc')->get();
        return view('items.listtwo', ['items'=> $items]);
    }
    public function indexhome()
    {
        $items = Item::latest()->paginate(5)
            ->where('active', '=', 1)
            ->where('customization', '=', 0);
        return view('items.listwelcome', ['items'=> $items])
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Item::all();
        $categories = Category::all();
        return view('items.form',  ['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
            $input = $request->all();

            if ($image = $request->file('image')) {
                $destinationPath = 'images/article';
                $articleImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $articleImage);
                $input['image'] = "$articleImage";
            }

            $item = new Item();
            $item->name = $request->has('name') && strlen($request->name) ? $request->name : 'Pas de nom';
            $item->description = $request->has('description') && strlen($request->description) ? $request->description : 'Pas de description';
            $item->price = $request->has('price') && strlen($request->price) ? $request->price : 'Pas de prix';

            //$item->image = $request->hasFile('image') && file($request->image) ? $request->image : 'none';
            $item->image = $request->has('image') && strlen($request->image= date('YmdHis') . "." . $image->getClientOriginalExtension()) ? $request->image : 'none';

            $item->amount = $request->has('amount') && strlen($request->amount) ? $request->amount : 'Pas de quantité';
            $item->customization = $request->has('customization') && strlen($request->customization) ? $request->customization : 'Pas de personnalisation';
            //$item->categories_id = intval($request->categories_id) ? $request->categories_id : '';
            //$item->active = intval($request->active) ? $request->active : '';
            $item->active = $request->has('active') && strlen($request->active) ? $request->active : '0';


            $category = Category::find($request->category);
            if($category) {
                $item->categories()->associate($category);
            }


            $item->save();

            if ($item->customization==0) { 
                return redirect('/mobilier')->with('success', 'L\'article "' . $item->name .'" a été ajouté !');
            } else {
                return redirect('/mobilier-personnalisable')->with('success', 'L\'article "' . $item->name .'" a été ajouté !');
            }
        }catch(Exception $e){
            return redirect()->back()->with('error','Ajout impossible: l\'image est trop lourde');
        }
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

    public function showdeux(Item $item)
    {   
        return view('items.two', ['item'=>$item]);
    }

    public function showarticle($id)
    {   
        $item = Item::find($id);
        return view('items.product', ['item'=>$item]);
    }

    public function showhome(Item $item)
    {   
        $item = Item::all();
        return view('welcome', ['item'=>$item]);
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
        $categories = Category::all();
        
        return view('items.edit', ['item'=>$item, 'categories'=>$categories]);
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
        /*$request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);*/
        try{
            $input = $request->all();

            if ($image = $request->file('image')) {
                $destinationPath = 'images/article';
                $articleImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $articleImage);
                $input['image'] = "$articleImage";
            }else{
                unset($input['image']);
            }
            
            
            $item = Item::find($id);
            $item->name = $request->has('name') && strlen($request->name) ? $request->name : $item->name;
            $item->description = $request->has('description') && strlen($request->description) ? $request->description : $item->description;
            $item->price = $request->has('price') && strlen($request->price) ? $request->price : $item->price;

            $item->image = $request->has('image') && strlen($request->image= date('YmdHis') . "." . $image->getClientOriginalExtension()) ? $request->image : $item->image;

            $item->amount = $request->has('amount') && strlen($request->amount) ? $request->amount : $item->amount;
            $item->customization = $request->has('customization') && strlen($request->customization) ? $request->customization : $item->customization;
            //$item->categories_id = intval($request->categories_id) ? $request->categories_id : $item->categories_id;
            //$item->active = intval($request->active) ? $request->active : $item->active;
            $item->active = $request->has('active') && strlen($request->active) ? $request->active : $item->active;
            
            $category = Category::find($request->category);
            $item->categories()->associate($category);

            $item->save();
            
            if ($item->customization==0) { 
                    return redirect('/mobilier')->with('update', 'L\'article "' . $item->name .'" a été modifié !');
                } else {
                    return redirect('/mobilier-personnalisable')->with('update', 'L\'article "' . $item->name .'" a été modifié !');
            }
        }catch(Exception $e){
            return redirect()->back()->with('error','Modification impossible: l\'image trop lourde');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $item = Item::find($id);
            $item->delete();
            //return redirect('/mobilier')->with('delete', 'Cet article a été supprimé avec succès!');
            return redirect()->back()->with('delete', 'L\'article ' . $item->name .' a été supprimé !');
        }catch(Exception $e){
            return redirect()->back()->with('error','Suppression impossible: des réservations sont enregistrées pour cet article.');
        }
    }
}
