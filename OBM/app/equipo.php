<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class equipo extends Model
{
  protected $fillable = [
      'nombre', 'cuenta', 'id_usuario','id:liga','img',
  ];

  public function users()
  {
    return $this->Belongsto('App\User','id_usuario','id','users');
  }
  public function equipo()
  {
    return $this->hasMany('App\equipo','id_equipo','id','equipos');
  }
}
