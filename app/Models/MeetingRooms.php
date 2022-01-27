<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeetingRooms extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "meetingRooms";

    public $fillable = [
        'subject',
        'Payments_id',
        "Clients_id",
        'Scheldules_id'



    ];

    protected $dates = ['deleted_at'];
}
