<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //one page has many comments relationship
    public function hasManyComments()
    {
        return $this->hasMany('App\Comment', 'page_id', 'id');
    }
}
