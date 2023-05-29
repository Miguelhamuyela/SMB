<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoomAcademicYear extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'room_academic_years';
    public $guarded = ['id'];

    public function students()
    {
        return $this->belongsTo(Student::class, 'fk_students_id');
    }

    public function courses()
    {
        return $this->belongsTo(Course::class, 'fk_course_id');
    }

    protected $dates = ['deleted_at'];
}
