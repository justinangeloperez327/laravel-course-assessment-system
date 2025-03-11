<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    /** @use HasFactory<\Database\Factories\InstructorFactory> */
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'email', 'user_id'];

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_instructors');
    }

    public function assessments()
    {
        return $this->hasMany(Assessment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
