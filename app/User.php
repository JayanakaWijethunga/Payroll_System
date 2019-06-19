<?php

namespace App;
Use App\Base;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function base(){

        //return $this->hasOne(\App\Base::class, 'ssn');
        return $this->hasOne('App\Base','ssn','ssn');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ssn','email','is_app_use_approve','verifyToken',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'remember_token',
    ];
}
