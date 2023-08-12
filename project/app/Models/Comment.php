<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [

    ];

    function User()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    function Publication()
    {
        return $this->belongsTo(Publication::class, 'publications_id');
    }
}
