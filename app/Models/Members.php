<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "members";

    public $fillable = [
        'occupation',
        'email',
        "tel",
        'name',
        "startups_id",
        "nif"


    ];

    protected $dates = ['deleted_at'];
}
