<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encontrista extends Model
{
    protected $table = 'encontrista';
    protected $primaryKey = 'id_encontrista';
    public $name;
}