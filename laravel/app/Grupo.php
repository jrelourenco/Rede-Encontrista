<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    function isAtivo()
    {
        return $this->dataInativaçao != null ? 'TRUE' : 'FALSE';
    }
}
