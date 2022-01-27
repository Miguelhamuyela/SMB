<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{

    use HasFactory;
    use SoftDeletes;
    protected $table = "payments";

    public $fillable = [
        'name',
        'value',
        "reference",
        'currency',
        'status'

    ];

    protected $dates = ['deleted_at'];

}

