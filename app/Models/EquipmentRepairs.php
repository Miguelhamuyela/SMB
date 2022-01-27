<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentRepairs extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "equipmentRepairs";

    public $fillable = [
        'equipmentName',
        'model',
        "image",
        "problemDetails",
        "Employees_id",
        "Scheldules_id",
        "reference",
        "Payments_id",
        "color"

    ];

    protected $dates = ['deleted_at'];
}
