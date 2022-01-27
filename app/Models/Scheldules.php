<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scheldules extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "scheldules";

    public $fillable = [
        'stared',
        'end',
        "prespective"


    ];

    protected $dates = ['deleted_at'];
}
