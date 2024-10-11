<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeesPay extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function couerse()
    {
        return $this->belongsTo(Course::class);
    }
    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }

    public function semesterFees()
    {
        return $this->belongsTo(SemesterFees::class);
    }

    public function student()
    {
        return $this->belongsTo(User::class);
    }
}
