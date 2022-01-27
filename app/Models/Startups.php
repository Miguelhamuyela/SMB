<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Startups extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "startups";

    public $fillable = [
        'name',
        'roomName',
        "email",
        "tel",
        "nif",
        "Scheldules_id",
        "Payments_id"



    ];

    protected $dates = ['deleted_at'];
}
