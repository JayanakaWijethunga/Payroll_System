<?php

namespace App;
Use App\Base;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\SadminResetPasswordNotification;
class Emp extends Authenticatable
{
    use Notifiable;


    public function base(){

        //return $this->hasOne(\App\Base::class, 'ssn');
        return $this->hasOne('App\Base','ssn','ssn');
    }


    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
   


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ssn','email','is_app_use_approve',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'remember_token',
    ];
    protected $table = 'emps';
}
