<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Merchant;
use Session;
use View;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::paginate(10);

        return view('item.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Item::all();
     
        return view::make('item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
                'item_name' => 'required|max:255',
                'item_stock' => 'required',
                'item_price' => 'required',
                'id_merchant'=> 'required'
            ));
        $items = $request->all();
        $items = new Item;
        $items->item_name = $request->item_name;
        $items->item_stock = $request->item_stock;
        $items->item_price = $request->item_price;
        $items->id_merchant = $request->id_merchant;
        $items->save();


      return redirect()->route('item.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_item)
    {
        $item = Item::find($id_item);

        return view('item.edit', compact('item', $item));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_item)
    {
        $item = Item::find($id_item);
        $item->item_name = $request->item_name;
        $item->item_stock = $request->item_stock;
        $item->item_price = $request->item_price;
        $item->id_merchant= $request->id_merchant;
        $item->save();

        return redirect()->route('item.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id_item);
        $item->delete();

        Session::flash('success', 'The item data was successfully deleted!');
        return redirect()->route('item.index');
    }
}
