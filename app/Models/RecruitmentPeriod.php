<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecruitmentPeriod extends Model
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
        'period_name',
        'batch',
        'date_start',
        'date_end',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'date_start' => 'date',
        'date_end' => 'date',
    ];
>>>>>>> 205a3d75786cecece2b6bbcbc4f1f254221a5709
}
