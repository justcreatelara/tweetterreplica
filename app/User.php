<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, Followable;

    public function getRouteKeyName(){
		
        return 'name';
    }

    public function path($append = ''){
	
		$path = route('profile', $this->username);
		
		return $append ? "{$path}/{$append}" : $path;
	}
   
    
    public function tweets(){
		
        return $this->hasMany(Tweet::class);
    }

    public function timeline(){
		
        $friends = $this->follows()->pluck('id');
        return Tweet::whereIn('user_id', $friends)->orWhere('user_id', $this->id)->latest()->get();
    }

    public function setPasswordAttribute($value)
    {
    $this->attributes['password'] = bcrypt($value);
    }

    
    public function getAvatarAttribute($value){
	
		return asset($value ?: '/images/default-avatar.jpg');
	}
	//asset return a full url for it 


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'avatar','username', 'email', 'password',
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
}
