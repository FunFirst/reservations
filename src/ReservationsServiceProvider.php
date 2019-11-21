<?php

namespace FunFirst\Reservations;

use Illuminate\Support\ServiceProvider;

class ReservationsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/reservations.php' => public_path('../config/cms.php'),
        ]);
    }

    public function register()
    {
    }
}
