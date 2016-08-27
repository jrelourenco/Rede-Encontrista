<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class Meeting extends Model
{

    protected $appends = ["type"];
    protected $hidden = ["created_at", "updated_at", 'type_id'];
    protected $dates = ["created_at", "updated_at", 'start_date', 'end_date'];
    protected $dateFormat = "U";


    public function getTypeAttribute()
    {
        return MeetingType::find($this->type_id);
    }

    

    public function encontristas()
    {
        return $this->belongsToMany(Encontrista::class)
            ->withPivot(['role', 'subscriber_id', 'participated', 'payed']);
    }

    public function newPivot(Model $parent, array $attributes, $table, $exists)
    {
        return new EncontristaMeeting($parent, $attributes, $table, $exists);
    }

}
