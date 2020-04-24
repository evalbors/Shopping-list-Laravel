<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{

    public function index()
    {
        $tags = Tag::all();
        return view('tag.index', compact ('tags'));
    }

    public function create()
    {   
        return view('tag.create');
    }

    public function store(Request $request, Tag $tag)
    {
        Tag::create($request->all());
        return redirect(route('item.create'));
    }

    public function show(Tag $tag)
    {
        
    }

    public function edit(Tag $tag)
    {

    }

    public function update(Request $request, Tag $tag)
    {
        //
    }

    public function destroy(Tag $tag)
    {
        //
    }
}
