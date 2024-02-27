<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vueloasiento extends Model
{
    use HasFactory;
    protected $primaryKey='idTipoAsiento';
    public $timestamps=false;
}
