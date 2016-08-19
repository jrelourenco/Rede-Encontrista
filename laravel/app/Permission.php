<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{

    static $guestPermissions = [
        'sidebar.home',
        'sidebar.profile',
        'sidebar.curriculum',
        'sidebar.calendar',
        'sidebar.subscribe',
        'sidebar.contact',
    ];

    static public function guest($permission)
    {
        return in_array($permission, static::$guestPermissions);
    }

    static public function permission($permission, $encontristaId)
    {

        if (!self::guest($permission))
            return is_null(Permission::all()
                ->where('encontrista_id', '=', $encontristaId)
                ->where('permission', '=', $permission)
                ->first());
        return true;
    }
}
