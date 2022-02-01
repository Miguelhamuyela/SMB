<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Scheldules extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "Scheldules";

    protected $guarded = ['id','started','end','prespective'];
    
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
