<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'requested_tickets',
    ];

    protected $hidden = [
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
        ];
    }

    public function tickets() {
        return $this->hasMany(Tickets::class);
    }

    public function events()
    {
        return $this->hasManyThrough(Events::class, Tickets::class, 'user_id', 'id', 'id', 'event_id');
    }
}
