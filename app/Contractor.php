<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Contractor extends Model
{
    //


    protected $fillable = [ 
        'user_id','projecttype','projectdescription','projectcurrentstage','projectlocation','costofproject','moneyspent','moneytospend','companyname','section','companyaddress','companyphone','contractawardletter','directorname1','directoraddress1','directorphone1','directorbvn1','directoridcard1','directorname2','directoraddress2','directorphone2','directorbvn2','directoridcard2'
    ];

    

    	    public function users()
		{
		   return $this->belongsTo('App\User');
		}


}
