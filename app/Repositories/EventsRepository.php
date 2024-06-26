<?php
namespace App\Repositories;

use App\Models\Events;

class EventsRepository 
{

    public function findById($eventId) {
        return Events::find($eventId);
    }
}