<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class gato extends Model
{
    //
    protected $table = 'gatos';
    protected $fillable = ['nombre','activo','id_raza','id_color','id_pelaje','id_complexion','id_caracter','id_tipo'];
    public $timestamps = false;
  public function caracter(){
  return $this->hasOne('App\caracter','id','id_caracter');
  }
    public function colores(){
        return  $this->hasOne('App\colores','id','id_color');
    }
    public function complexion(){
        return  $this->hasOne('App\complexion','id','id_complexion');
    }
    public function pelajes(){

        return  $this->hasOne('App\pelajes','id','id_pelaje');
    }
    public function razas(){
        return    $this->hasOne('App\razas','id','id_raza');
    }
    public function tipo(){
        return    $this->hasOne('App\tipo','id','id_tipo');
    }
}
