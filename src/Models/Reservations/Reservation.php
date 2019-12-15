<?php

namespace FunFirst\Reservations\Models\Reservations;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use SoftDeletes;
    
    protected $table = 'reservations';

    protected $fillable = [
        'course_date_id',
        'source_type',
        'source_code',
        'status',
    ];

    public function courseDate()
    {
        return $this->belongsTo(\FunFirst\Reservations\Models\Courses\CourseDate::class);
    }
}
