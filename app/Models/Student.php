<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $fillable =
    [
        'name',
        'matric_number'
    ];

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'student_subjects', 'student_id', 'subject_id');
    }
    public function student_subjects()
    {
        return $this->hasMany(StudentSubject::class, 'student_id', 'id');
    }
}
