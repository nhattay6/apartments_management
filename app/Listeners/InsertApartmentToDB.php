<?php

namespace App\Listeners;

use App\Events\CreateApartment;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Apartment; 

class InsertApartmentToDB
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    protected $apartment;
    
    public function __construct(Apartment $apartment)
    {
        $this->apartment = $apartment;
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\CreateApartment  $event
     * @return void
     */
    public function handle(CreateApartment $event)
    {
        activity()->causedBy(auth()->user())->performedOn($this->apartment)->log('Added 1 apartment');
    }
}
