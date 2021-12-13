<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Consumer extends Model
{
    //

protected $fillable = [ 
       'employmentstatus','currentworkplace','workplaceaddress','closestlandmark','department','netmonthlysalary','payday','staffidcard','otherid','passport','pensionstatement'
    ];

    	    public function users()
		{
		   return $this->belongsTo('App\User');
		}

}
