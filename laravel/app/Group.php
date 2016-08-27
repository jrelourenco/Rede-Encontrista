<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * @property mixed inactivation_date
 * @property mixed active
 */
class Group extends Model
{

    protected $appends = ['active', 'team_coordinator', 'members'];
    protected $dateFormat = "U";
    // protected $dates = ['creation_date', 'inactivation_date'];
    protected $hidden = ["created_at", "updated_at",];

    public function getActiveAttribute()
    {
        return is_null($this->inactivation_date) ? true : false;
    }


    public function members()
    {
        return $this->hasMany(Role::class);
    }

    public function getTeamCoordinatorAttribute()
    {


        $school_year = DB::table('roles')
            ->whereIn('role_id', Role::role(["Coordenador", "Secretario", "Tesoureiro"]))
            ->select('school_year')
            ->distinct()
            ->orderBy('school_year', 'desc')
            ->get();


        foreach ($school_year as $year) {
            $vars['years'][] = $year->school_year;
            $vars[$year->school_year]["coordinator"] = $this->members()->where([
                ['school_year', '=', $year->school_year],
                ['role_id', '=', Role::role('Coordenador')],
            ])->first();
            $vars[$year->school_year]["secretary"] = $this->members()->where([
                ['school_year', '=', $year->school_year],
                ['role_id', '=', Role::role('Secretario')],
            ])->first();
            $vars[$year->school_year]["treasurer"] = $this->members()->where([
                ['school_year', '=', $year->school_year],
                ['role_id', '=', Role::role('Tesoureiro')],
            ])->first();

        }


        return $vars;
    }

    public function getMembersAttribute()
    {
        return $this->members()->whereRoleId(Role::role('Encontrista'))->get();
    }


}
