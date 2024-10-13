<?php

namespace App\Providers;

use App\Domain\Booking\Repositories\IBookingRepository;
use Illuminate\Support\ServiceProvider;

class BookingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
