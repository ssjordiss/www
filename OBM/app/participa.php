<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class participa extends Model
{
    protected $table = 'participa';

    protected $fillable = [
        'id_liga', 'id_suario', 'id',
    ];

    public function users()
    {
      return $this->hasMany('App\User','id','id','users');
    }
    public function ligas()
    {
      return $this->hasMany('App\liga','id','id','ligas');
    }
}
