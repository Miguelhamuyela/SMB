<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registration extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "registrations";

    protected $guarded = ['id'];


    public function courses()
    {
        return $this->belongsTo(Course::class, 'fk_course_id');
    }

    public function procinces()
    {
        return $this->belongsTo(Province::class, 'fk_provinces_id');
    }


    protected $dates = ['deleted_at'];



}
