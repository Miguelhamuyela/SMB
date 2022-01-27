<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "employees";

    public $fillable = [
        'name',
        'tel',
        "email",
        "nif"

    ];

    protected $dates = ['deleted_at'];
}
