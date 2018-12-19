<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class gato extends Model
{
    //
    protected $table = 'gatos';
    protected $fillable = ['nombre','activo','id_raza','id_color','id_pelaje','id_complexion','id_caracter','id_tipo'];

  public function caracter(){
  return $this->hasOne('App\caracter','id','id_caracter');
  }
    public function colores(){
        return     $this->hasOne('App\colores','id','id_color');
    }
    public function complexion(){
        return  $this->hasMany('App\complexion','id_complexion');
    }
    public function pelajes(){
        return  $this->hasMany('App\pelajes','id_pelaje');
    }
    public function razas(){
        return    $this->hasMany('App\razas','id_raza');
    }
    public function tipo(){
        return    $this->hasMany('App\tipo','id_tipo');
    }
}
