<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Startup extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "Startups";

    protected $guarded = ['id'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */

    public function payments(){
        return $this->belongsTo(Payment::class, 'fk_Payments_id', 'id');
    }
    
    public function scheldules(){
        return $this->belongsTo(Scheldule::class, 'fk_Scheldules_id', 'id');
    }
    
    protected $dates = ['deleted_at'];

}
