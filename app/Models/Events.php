<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_name',
        'start_date_time',
        'end_date_time',
        'city',
        'country',
        'tickets_allocated',
        'tickets_per_user',
    ];

    public function tickets() 
    {
        return $this->hasMany(Tickets::class);
    }

    public function users()
    {
        return $this->hasManyThrough(User::class, Tickets::class, 'event_id', 'id', 'id', 'user_id');
    }
}
