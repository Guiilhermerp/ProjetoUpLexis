<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
    //
    protected $fillable=[
        'titulo',
        'link'
    ];
    public function usuario(){
        return $this->belongsTo(\App\User::class,'id_usuario','id');
    }
}
