<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['name', 'priority'];

    public function itemList() // new
    {
        return $this->belongsTo(ItemList::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    
}
