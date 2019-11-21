<?php

namespace FunFirst\Reservations\Models\Courses;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    protected $fillable = [];

    public function terms()
    {
        return $this->hasMany(\FunFirst\Reservations\Models\Courses\CourseDate::class);
    }
}
