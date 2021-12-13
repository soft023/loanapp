<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Trader extends Model
{
    //

protected $fillable = [ 
       'user_id','natureofbusiness','businessage','weeklysales','refreename1','refreerelationship1','refreeaddress1','refreephone1','refreename2','refreerelationship2','refreeaddress2','refreephone2','bankaccountname','bankaccountnumber','bvn','bankstatement','passport','otherid'
    ];

    

		    public function users()
		{
		   return $this->belongsTo('App\User');
		}

}
