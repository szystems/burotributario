<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaAudio extends Model
{
    use HasFactory;

    protected $table = 'media_audios';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable = [
        'user_id',
        'course_id',
        'audio_id',
    ];
}
