<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\DB;
class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Item::all();
        return view('item',['items'=>$items, 'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $items = Item::all();
        return view('item',['items'=>$items, 'layout'=>'create']);
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
        $item = new Item;
        $item->item_name = $request->input('item_name');
        $item->discription = $request->input('discription');
        $item->address = $request->input('address');
        $item->price = $request->input('price');
        $item->discount = $request->price*15/100;
        $item->tax = $request->price*5/100;
        $item->actual_price = $request->price - $request->price*15/100 - $request->price*5/100;
        $item->save();  
        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $item = Item::find($id);
        $items = Item::all();
        return view('item',['items'=>$items, 'item'=>$item, 'layout'=>'show']);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $item = Item::find($id);
        $items = Item::all();
        return view('item',['items'=>$items, 'item'=>$item, 'layout'=>'edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $item = Item::find($id);
        $item->item_name = $request->input('item_name');
        $item->discription = $request->input('discription');
        $item->address = $request->input('address');
        $item->price = $request->input('price');
        $item->discount = $request->price*15/100;
        $item->tax = $request->price*5/100;
        $item->actual_price = $request->price - $request->price*15/100 - $request->price*5/100;
        $item->save();  
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $item = Item::find($id);
        $item->delete();
        return redirect('/');
    }
}
