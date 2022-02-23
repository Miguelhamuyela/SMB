<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{

    use HasFactory, SoftDeletes;
    protected $table = "payments";

    protected $guarded = ['id'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];


    public function equipaments(){

        return $this->belongsTo(EquipmentRepair::class, 'fk_Payments_id');
    }

    public function startups(){

        return $this->belongsTo(Startup::class, 'fk_Payments_id');
    }

}


