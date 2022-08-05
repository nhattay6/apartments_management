<?php

namespace App\Listeners;

use App\Events\CreateApartmentRoom;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Apartmentroom; 

class InsertRoomToDB
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    protected $room;

    public function __construct(Apartmentroom $room)
    {
        $this->room = $room;
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\CreateApartmentRoom  $event
     * @return void
     */
    public function handle(CreateApartmentRoom $event)
    {
        activity()->causedBy(auth()->user())->performedOn($this->room)->log('added 1 room');
    }
}
