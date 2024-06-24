<?php
namespace App\Repositories;

use App\Models\Events;

class EventsRepository {
    // protected $event;

    // public function __construct(Events $event) {
    //     $this->event = $event;
    // }

    public function findById($eventId) {
        return Events::find($eventId);
    }
}