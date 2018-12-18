<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class gato extends Model
{
    //
    protected $table = 'gatos';
    protected $fillable = ['nombre','activo','id_raza','id_color','id_pelaje','id_complexion','id_caracter','id_tipo'];

}
