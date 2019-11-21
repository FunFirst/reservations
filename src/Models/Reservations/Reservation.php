<?php

namespace FunFirst\Reservations\Models\Reservations;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations';

    protected $fillable = [];

    public function courseDate()
    {
        return $this->belongsTo(\FunFirst\Reservations\Models\Courses\CourseDate::class);
    }
}
