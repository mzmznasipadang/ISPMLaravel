<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampusStreamCourse extends Model
{
    use HasFactory;
<<<<<<< HEAD
=======

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'major_id',
        'stream_course_name',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'major_id' => 'integer',
    ];

    public function major()
    {
        return $this->belongsTo(CampusMajor::class);
    }
>>>>>>> 205a3d75786cecece2b6bbcbc4f1f254221a5709
}
