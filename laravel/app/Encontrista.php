<?php

namespace App;


use Illuminate\Foundation\Auth\User as Authenticatable;
use  Illuminate\Database\Query\Builder;

class Encontrista extends Authenticatable
{


    public function encontros()
    {
        return $this->belongsToMany(Encontro::class)->withPivot(['encontrista_id', 'encontro_id', 'created_at', 'updated_at', 'role', 'subscriber', 'participated', 'payed']);
    }

    protected $hidden = [
        'password', 'remember_token',
    ];
}
