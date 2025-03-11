<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAssessment extends Model
{
    /** @use HasFactory<\Database\Factories\StudentAssessmentFactory> */
    use HasFactory;

    protected $fillable = [
        'student_id',
        'assessment_id',
        'total_score',
        'submitted_at',
        'feedback',
    ];

    protected $casts = [
        'submitted_at' => 'datetime',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function assessment()
    {
        return $this->belongsTo(Assessment::class);
    }
}
