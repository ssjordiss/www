<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class liga extends Model
{
  public function participa()
  {
    return $this->hasMany('App\participa','id_liga','id_liga','participa');
  }
}
