<?php

namespace App;

use App\User;

use Illuminate\Database\Eloquent\Model;

class Loanhistory extends Model
{
    //

    protected $fillable = [ 
        'user_id','amountrequested','amountgranted','tenor','loanpurpose','processedby','processeddate','loanrequeststatus','loanstatus','reasonforyes', 'reasonforno'
    ];


    

    	  public function users()
		{
		   return $this->belongsTo('App\User');
		}

}
