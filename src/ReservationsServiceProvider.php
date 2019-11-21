<?php

namespace FunFirst\Reservations;

use Illuminate\Support\ServiceProvider;

class ReservationsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/reservations.php' => public_path('../config/cms.php'),
        ]);

        if (! class_exists('CreateCourseDatesTable')) {
            $this->publishes([
                __DIR__ . '/../database/migrations/create_course_dates_table.php.stub' => 
                    database_path('migrations/' . date('Y_m_d_His', time()) . '_create_course_dates_table.php')
            ], 'migrations');
        }

        if (! class_exists('CreateCoursesTable')) {
            $this->publishes([
                __DIR__ . '/../database/migrations/create_courses_table.php.stub' => 
                    database_path('migrations/' . date('Y_m_d_His', time()) . '_create_courses_table.php')
            ], 'migrations');
        }

        if (! class_exists('CreateReservationsTable')) {
            $this->publishes([
                __DIR__ . '/../database/migrations/create_reservations_table.php.stub' => 
                    database_path('migrations/' . date('Y_m_d_His', time()) . '_create_reservations_table.php')
            ], 'migrations');
        }
    }

    public function register()
    {
    }
}
