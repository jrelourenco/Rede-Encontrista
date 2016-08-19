<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Encontro extends Model
{


    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'data_inicio',
        'data_final',
    ];

    public function tipo()
    {
        return $this->hasOne(TipoEncontro::class, 'id');
    }


    /**
     * @deprecated
     * @return mixed
     */
    public static function courses()
    {
        return Encontro::join('tipo_encontros', 'encontros.id_tipo', '=', 'tipo_encontros.id')
            /*->select([
                'encontros.id as \'encontro_id\'',
                'encontros.created_at as \'encontro_created_at\'',
                'encontros.updated_at as \'encontro_updated_at\'',
                'encontros.lugar',
                'encontros.data_inicio',
                'encontros.data_final',
                'encontros.descricao as \'encontro_descricao\'',
                'tipo_encontros.id as \'tipo_encontro_id\'',
                'tipo_encontros.created_at as \'tipo_encontro_created_at\'',
                'tipo_encontros.updated_at as \'tipo_encontro_updated_at\'',
                'tipo_encontros.nome_encontro',
                'tipo_encontros.tipo_encontros',
                'tipo_encontros.morada',
                'tipo_encontros.descricao as \'tipo_encontro_descricao\'',

            ]);*/
            ->get();
    }

    /**
     * @return mixed
     */
    public static function getFuture()
    {
        return self::where('data_inicio', '>', Carbon::today())
            ->get();
    }

    public function state()
    {

       if(Carbon::today()->between($this->data_inicio, $this->data_final)) return "a decorer";
       if(Carbon::today()->gte($this->data_final)) return "terminado";
       if(Carbon::today()->lte($this->data_inicio)) return "previsto";
    }


}
