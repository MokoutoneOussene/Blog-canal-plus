<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    use HasFactory;

    protected $guarded = [

    ];

    function Service()
    {
        return $this->hasOne(Service::class);
    }

    function Filliale()
    {
        return $this->belongsTo(Filiale::class, 'filiales_id');
    }
}
