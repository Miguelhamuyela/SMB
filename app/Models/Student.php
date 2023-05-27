<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "students";

    protected $guarded = ['id'];

    public function courses()
    {
        return $this->belongsTo(Course::class, 'fk_course_id');
    }

  

    public function academic_years()
    {
        return $this->belongsTo(AcademicYear::class, 'fk_academic_years_id');
    }

    public function procinces()
    {
        return $this->belongsTo(Province::class, 'fk_provinces_id');
    }

    public function municipies()
    {
        return $this->belongsTo(Municipe::class, 'fk_municipies_id');
    }

    public function students()
    {
        return $this->belongsTo(Student::class, 'fk_students_id');
    }

    protected $dates = ['deleted_at'];

}
