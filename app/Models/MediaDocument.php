<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaDocument extends Model
{
    use HasFactory;

    protected $table = 'media_documents';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable = [
        'user_id',
        'course_id',
        'document_id',
    ];
}
