<?php

namespace App;
use App\SubKategory;
use Illuminate\Database\Eloquent\Model;

class Kategory extends Model
{
    public function categoryAllSub()
    {
        return $this->hasMany('App\SubKategory', 'category_id', 'id'); //KOLEKCIJA
    }
}
