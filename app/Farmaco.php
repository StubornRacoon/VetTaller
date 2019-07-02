<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmaco extends Model
{
    public function joinRecipe(){
      return $this->belongsTo(Receta::class);
    }
}
