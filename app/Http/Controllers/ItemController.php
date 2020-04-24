<?php

namespace App\Http\Controllers;

use App\Item;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ItemController extends Controller
{

    public function index()
    {
        $items = Item::all();
        return view('item.index', compact ('items'));
    }

    public function create()
    {   
        $tags = Tag::all();
        return view('item.create', compact ('tags'));
    }

    public function store(Request $request, Item $item)
    {
        $item = Item::create($request->all());
        $item ->tags()->sync($request->tags);
        return redirect(route('item.index'));
    }

    public function show(Item $item)
    {
        return view('item.show', compact ('item'));
    }

    public function edit(Item $item)
    {   
        return view('item.edit', ['item'=>$item]);    
    }
        
    public function update(Request $request, Item $item)
    {
        $item->update($request->all());
        return redirect(route('item.index'));    
    }


    public function destroy(Item $item)
    {
        $item->delete();
        return redirect(route('item.index'));
    }
}
