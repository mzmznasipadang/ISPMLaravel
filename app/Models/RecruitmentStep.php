<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecruitmentStep extends Model
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
        'detail_id',
        'step_name',
        'step_order',
        'step_description',
        'step_score_min',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'detail_id' => 'integer',
        'step_score_min' => 'float',
    ];

    public function detail()
    {
        return $this->belongsTo(RecruitmentDetail::class);
    }
>>>>>>> 205a3d75786cecece2b6bbcbc4f1f254221a5709
}
