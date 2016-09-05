<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Group extends Model
{

    use SoftDeletes;

    protected $appends = ['active', 'team_coordinator', 'members'];
    
    // protected $dates = ['creation_date', 'inactivation_date'];
    protected $hidden = ["created_at", "updated_at","deleted_at"];

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
            ->where('group_id', $this->id)
            ->select('school_year')
            ->distinct()
            ->orderBy('school_year', 'desc')
            ->get();

        $vars = [];
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

    public function setRole($role_id, $group_id, $year, $encontrista_id)
    {
        $var = Role::where([["school_year", $year], ['group_id', $group_id], ['role_id', $role_id]])->first();
        if (is_null($var)) {

            $var = new Role();

            $var->school_year = $year;
            $var->group_id = $group_id;
            $var->role_id = $role_id;
            $var->encontrista_id = $encontrista_id;
        } else
            $var->encontrista_id = $encontrista_id;
        $var->save();


    }


}
