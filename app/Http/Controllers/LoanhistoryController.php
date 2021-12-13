<?php

namespace App\Http\Controllers;

use App\Loanhistory;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Mail;
use App\Mail\Requestnotification;

class LoanhistoryController extends Controller
{

        public function __construct()
    {
          $this->middleware(['auth', 'verified']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    


    // public function requestloanx(){
         
    //        $username = Auth::admin()->username;
        
    //        $consumerpro = Consumer::find($id);
    //        $consumerpro->employmentstatus = Input::get('employmentstatus');
    //        $consumerpro->currentworkplace = Input::get('currentworkplace');
    //        $consumerpro->workplaceaddress = Input::get('workplaceaddress');
    //        $consumerpro->closestlandmark = Input::get('closestlandmark');
    //        $consumerpro->department = Input::get('department');
    //        $consumerpro->officeemail = Input::get('officeemail');
    //        $consumerpro->netmonthlysalary = Input::get('netmonthlysalary');
    //        $consumerpro->payday = Input::get('payday');
    //        $consumerpro->staffidcard = $staffidfilename;
    //        $consumerpro->otherid = $otheridfilename;
    //        $consumerpro->passport = $passportfilename;
    //        $consumerpro->pensionstatement = $statementfilename;
    //        $consumerpro->save();
    //      //return  
    //      return Redirect::back()->with('success','Your request is being processed,we would get back to you soonest');
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function loanhistory()
    {
        $id = Auth::user()->id;

        $loanhistory = Loanhistory::select('amountrequested','amountgranted','loanpurpose','tenor','loanrequeststatus','loanstatus')->where('user_id',$id)->get();
        return view('/loanhistory')->with('loanrequests',$loanhistory);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function requestloan(Request $request)
    {
           $id = Auth::user()->id;
           $active =   Loanhistory::select('user_id')->where('loanstatus',"Active")->get();
           $count =  count($active);
           if ($count > 0){
               $message = "Your request is not successful, because you have an active loan status";
            }else{

           $loanhistory = new Loanhistory;
           $loanhistory->user_id = $id;
           $loanhistory->amountrequested = Input::get('amountrequested');
           $loanhistory->tenor = Input::get('tenor');
           $loanhistory->loanpurpose = Input::get('loanpurpose');
           $loanhistory->loanrequeststatus = "Pending";
           $loanhistory->loanstatus = "Inactive";
           $loanhistory->save();


          $comment = 'Hi, This is a subject.';
          Mail::to("fasasisheriffdeen@gmail.com")->send(new MailNotify($comment));
 
      if (Mail::failures()) {
           return response()->Fail('Sorry! Please try again latter');
      }else{
           return response()->success('Great! Successfully send in your mail');
         }



           $message = "Your request is being processed,we would get back to you soonest";

         }
        
     
        return Redirect::back()->with('success',$message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Loanhistory  $loanhistory
     * @return \Illuminate\Http\Response
     */
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Loanhistory  $loanhistory
     * @return \Illuminate\Http\Response
     */


public function loandeclined(){
           $tit1 = date("H");
           $tit2 = date("i");
           $tit3 = date("s");
           $timm = $tit1.$tit2.$tit3; 
           $username = Auth::admin()->username;
           $loanhistory = Loanhistory::find($id);
           $loanhistory->processedby =  $username;
           $loanhistory->processeddate = $timm;
           $loanhistory->reasonforyes = Input::get('reasonforno');
           $loanhistory->save();
           return Redirect::back()->with('success','Record is updated successfully');
}
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Loanhistory  $loanhistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loanhistory $loanhistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Loanhistory  $loanhistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loanhistory $loanhistory)
    {
        //
    }
}
