<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coworks extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "coworks";

    public $fillable = [
        'title',
        'Scheldules_id',
        "Clients_id",
        "Payments_id"

    ];

    protected $dates = ['deleted_at'];
}
