<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auditoriums extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "auditoriums";

    public $fillable = [
        'Scheldules_id',
        'Clients_id',
        "titleConference",
        "Payments_id"
      


    ];

    protected $dates = ['deleted_at'];
}
