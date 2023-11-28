<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $table = 'instructors';

    protected $primaryKey='id';

    public $timestamps=true;

    protected $fillable = [
        'name',
        'description',
        'image',
        'twitter',
        'facebook',
        'instagram',
        'linkedin',
    ];
}
