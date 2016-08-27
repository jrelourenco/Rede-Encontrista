<?php
/**
 * Created by PhpStorm.
 * User: jrel
 * Date: 2016-08-23
 * Time: 09:37
 */

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Support\Facades\Auth;

class EncontristaMeeting extends Pivot
{

    protected $appends = [
        'subscribed',
        'subscriber',

    ];

    protected $hidden = [
        "meeting_id",
        "subscriber_id",
    ];

    protected $casts = [
        'payed' => 'boolean',
        'participated' => 'boolean',
    ];

    public function getSubscribedAttribute()
    {
        return true;
    }

    public function getSubscriberAttribute()
    {

        return Encontrista::find($this->subscriber_id)->first();
    }


}