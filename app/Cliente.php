<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function joinPet(){
      return $this->hasMany(Pet::class);
    }
}
