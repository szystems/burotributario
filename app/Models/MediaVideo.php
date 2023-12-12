<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaVideo extends Model
{
    use HasFactory;

    protected $table = 'media_videos';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable = [
        'user_id',
        'course_id',
        'video_id',
    ];
}
