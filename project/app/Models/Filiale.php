<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiale extends Model
{
    use HasFactory;

    protected $guarded = [

    ];

    function Direction()
    {
        return $this->hasOne(Direction::class);
    }
}
