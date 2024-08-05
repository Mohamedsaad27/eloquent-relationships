<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'email', 'username', 'password', 'gender_id', 
        'date_of_birth', 'grade_id', 'classroom_id', 'section_id', 'academic_year'
    ];

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function classRoom()
    {
        return $this->belongsTo(ClassRoom::class, 'classroom_id');
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
