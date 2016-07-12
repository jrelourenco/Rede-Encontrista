<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encontrista extends Model
{
    protected $table = 'encontrista';
    protected $primaryKey = 'id_encontrista';

    protected $hidden = [
        'password', 'remember_token',
    ];
}
