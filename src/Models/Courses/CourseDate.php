<?php

namespace FunFirst\Reservations\Models\Courses;

use Illuminate\Database\Eloquent\Model;

class CourseDate extends Model
{
    protected $table = 'course_dates';

    protected $fillable = [];

    public function course()
    {
        return $this->belongsTo(\FunFirst\Reservations\Models\Courses\Course::class);
    }

    public function reservations()
    {
        return $this->hasMany(\FunFirst\Reservations\Models\Reservations\Reservation::class);
    }
}
