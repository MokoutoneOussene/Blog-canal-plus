<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = [

    ];

    function Publication()
    {
        return $this->hasOne(Publication::class);
    }

    function Projet()
    {
        return $this->hasOne(Projet::class);
    }

    function User()
    {
        return $this->hasOne(User::class);
    }

    function Direction()
    {
        return $this->belongsTo(Direction::class, 'directions_id');
    }
}
