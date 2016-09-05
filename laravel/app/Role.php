<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Role extends Model
{
    protected $fillable = ['school_year', 'group_id', 'role_id'];
    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
        'role_id',
        'group_id',
        'encontrista_id',
        'school_year'
    ];

    protected $appends = [
        //'role',
        'encontrista',
    ];

    protected static function role($name)
    {
        $toReturn = [];
        if (is_array($name)) {
            foreach ($name as $n)
                $toReturn[] = DB::table('role_types')->whereName($n)->first()->id;
            return $toReturn;
        }
        return DB::table('role_types')->whereName($name)->first()->id;
    }


    public function getRoleAttribute()
    {
        return DB::table('role_types')->find($this->role_id)->name;
    }

    public function getEncontristaAttribute()
    {


        return [
            'id' => $this->encontrista_id,
            'name' => Encontrista::find($this->encontrista_id)->name,
        ];

    }

  


}
