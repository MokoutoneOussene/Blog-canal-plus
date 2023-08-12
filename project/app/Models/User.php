<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = [

    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    function Role()
    {
        return $this->belongsTo(Role::class, 'roles_id');
    }

    function Service()
    {
        return $this->belongsTo(Service::class, 'services_id');
    }

    function Projet()
    {
        return $this->hasOne(Projet::class);
    }

    function Publication()
    {
        return $this->hasOne(Publication::class);
    }

    function Formulaire()
    {
        return $this->hasOne(Formulaire::class);
    }

    function Comment()
    {
        return $this->hasOne(Comment::class);
    }

    function CommentPost()
    {
        return $this->hasOne(CommentPost::class);
    }

    function Post()
    {
        return $this->hasOne(Post::class);
    }

    // les fonctions de gate
    public function isAdmin()
    {
        return $this->Role()->where('id', '=', 1)->first();
    }

    public function hasAnyRole(array $roles)
    {
        return $this->Role()->whereIn('id', $roles)->first();
    }
}
