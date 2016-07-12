<?php

namespace App;


use Illuminate\Foundation\Auth\User as Authenticatable;

class Encontrista extends Authenticatable
{
    protected $table = 'encontrista';
    protected $primaryKey = 'id_encontrista';

    protected $hidden = [
        'password', 'remember_token',
    ];
}
