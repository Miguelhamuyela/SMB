<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "clients";

    public $fillable = [
        'name',
        'tel',
        "email",
        "nif",
        "address"


    ];

    protected $dates = ['deleted_at'];
}
