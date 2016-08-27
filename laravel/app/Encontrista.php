<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use  Illuminate\Database\Query\Builder;

class Encontrista extends Authenticatable
{


    public function meetings()
    {
        return $this->belongsToMany(Meeting::class)->withPivot([
            'role',
            'subscriber_id',
            'participated',
            'payed'
        ]);
    }

    protected $hidden = [
        'password', 'remember_token', "created_at", "updated_at",
    ];


    public function newPivot(Model $parent, array $attributes, $table, $exists)
    {
        return new EncontristaMeeting($parent, $attributes, $table, $exists);
    }

    public function roles()
    {
        return $this->hasMany(Role::class);
    }
}
