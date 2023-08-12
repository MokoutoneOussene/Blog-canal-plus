<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $guarded = [

    ];

    function User()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    function Service()
    {
        return $this->belongsTo(Service::class, 'services_id');
    }

    function Categorie()
    {
        return $this->belongsTo(Categorie::class, 'categories_id');
    }

    function Comment()
    {
        return $this->hasOne(Comment::class);
    }
}
