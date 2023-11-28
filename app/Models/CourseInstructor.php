<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseInstructor extends Model
{
    use HasFactory;

    protected $table = 'course_instructors';

    protected $primaryKey='id';

    public $timestamps=true;

    protected $fillable = [
        'course_id',
        'instructor_id',
    ];
}
