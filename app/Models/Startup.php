<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Startup extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "startups";

    protected $guarded = ['id'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */

    
    public function Scheldules()
    {
        return $this->belongsTo(Scheldule::class, 'fk_Scheldules_id');
    }

    public function Payments()
    {
        return $this->belongsTo(Payment::class, 'fk_Payments_id');
    }





    protected $dates = ['deleted_at'];

}
