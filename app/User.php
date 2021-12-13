<?php

namespace App;


use App\Trader;
use App\Contract;
use App\Consumer;
use App\Loanhistory;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 
        'firstname','lastname','surname','email','password','maritalstatus','title','noofdependant','phone','address','dob','howdidyouhearaboutus','nokfullname','relationshipwithnok','nokphone','jobclassification'
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
 

        public function traders()
        {
        return $this->hasOne('App\Trader');
        }

        public function consumers()
        {
        return $this->hasOne('App\Consumer');
        }

        public function Contractors()
        {
        return $this->hasOne('App\Contractor');
        }

          public function loanhistories()
        {
        return $this->hasMany('App\Loanhistory');
        }


}
