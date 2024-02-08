<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BlongsTo;

class Document extends Model
{
    use HasFactory;

    protected $table = 'documents';

    protected $primaryKey='id';

    public $timestamps=true;

    protected $fillable = [
        'course_id',
        'name',
        'description',
        'file_pdf',
    ];

    public function courses(): BelongsTo
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
}
