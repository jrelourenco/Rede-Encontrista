<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{

    protected $appends = array('active');

    public function getActiveAttribute()
    {
        return is_null($this->data_inativacao) ? true : false;
    }

    
}
