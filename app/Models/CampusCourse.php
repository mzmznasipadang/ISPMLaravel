<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampusCourse extends Model
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
        'course_name',
        'course_credit',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];
>>>>>>> 205a3d75786cecece2b6bbcbc4f1f254221a5709
}
