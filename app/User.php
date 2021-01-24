<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    public function assignRole($role)
    {
        // $this->roles()->save($role);

        if (is_string($role)) {
            $role = Role::whereName($role)->firstOrFail();
        }
        
        $this->roles()->sync($role, false);
    }

    public function abilities()
    {
        return $this->roles->map->abilities->flatten()->pluck('name')->unique();
    }

    public function conversations()
    {
        return $this->hasMany(Conversation::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function routeNotificationForNexmo($notification)
    {
        // return $this->phone_number;

        return '923004256703';
    }

    public function articles() 
    {
        return $this->hasMany(Article::class);  // select * from articles where user_id = 1
         // $user = User::find(1);  // select * from user where id = 1 
        // $user->articles // select * from articles where user_id = $user->id
    }
    // $user->articles
    
    public function projects()
    {
        return $this->hasMany(Project::class);   // select * from projects where user_id = 1
        // $user = User::find(1);  // select * from user where id = 1 
        // $user->projects // select * from projects where user_id = $user->id
    }
    // $user->projects
}

