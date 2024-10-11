<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'course_subjects', 'course_id', 'subject_id');
    }

   public function fees()
    {
        return $this->hasMany(SemesterFees::class, 'course_id', 'id');
    }
    /*************  ✨ Codeium Command ⭐  *************/
    /**
     * Get the users that belong to the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    /******  7e2f92bf-df50-48aa-b526-2089e8be1401  *******/
   
}
