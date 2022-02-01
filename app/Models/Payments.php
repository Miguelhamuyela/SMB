<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payments extends Model
{

    use HasFactory, SoftDeletes;
    protected $table = "Payments";

    protected $guarded = ['id','name','value','reference','currency','status'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

}

