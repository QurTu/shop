<?php

namespace App;


use App\subKategory;
use App\Kategory;
use Illuminate\Database\Eloquent\Model;

class SubKategory extends Model
{
    public function subCategoryBelongs()
    {
        return $this->belongsTo(Kategory::class, 'category_id', 'id');
    }
}
