<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampusMajor extends Model
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
        'major_name',
        'major_type',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    public function campusStreamCourses()
    {
        return $this->hasMany(CampusStreamCourse::class);
    }

    public function students()
    {
        return $this->hasMany(Students::class);
    } 
>>>>>>> 205a3d75786cecece2b6bbcbc4f1f254221a5709
}
