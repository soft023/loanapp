<?php

namespace App\Http\Controllers;

use App\Consumer;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ConsumerController extends Controller
{

      public function __construct()
    {
          $this->middleware(['auth', 'verified']);
    }


      public function updateconsumerprofile(){

           $tit1 = date("H");
           $tit2 = date("i");
           $tit3 = date("s");
           $timm = $tit1.$tit2.$tit3;

           $filenam = Input::file('passport')->getClientOriginalName();
           $passportfilename = $timm.$filenam;

           $filenamx = Input::file('pensionstatement')->getClientOriginalName();
           $statementfilename = $timm.$filenamx;

           $filenamxx = Input::file('otherid')->getClientOriginalName();
           $otheridfilename = $timm.$filenamxx;

           $filenamxxx = Input::file('staffidcard')->getClientOriginalName();
           $staffidfilename = $timm.$filenamxxx;

           $id = Auth::user()->id;
           $consumerpro = Consumer::where('user_id', '=', $id)->first();
           $consumerpro->employmentstatus = Input::get('employmentstatus');
           $consumerpro->currentworkplace = Input::get('currentworkplace');
           $consumerpro->workplaceaddress = Input::get('workplaceaddress');
           $consumerpro->closestlandmark = Input::get('closestlandmark');
           $consumerpro->department = Input::get('department');
           $consumerpro->officeemail = Input::get('officeemail');
           $consumerpro->netmonthlysalary = Input::get('netmonthlysalary');
           $consumerpro->payday = Input::get('payday');
           $consumerpro->staffidcard = $staffidfilename;
           $consumerpro->otherid = $otheridfilename;
           $consumerpro->passport = $passportfilename;
           $consumerpro->pensionstatement = $statementfilename;
           $consumerpro->save();
          //return  Now time to save pics into their respective folders
           Input::file('passport')->move(public_path('consumer/passport'),$passportfilename);
           Input::file('otherid')->move(public_path('consumer/otherid'),$otheridfilename);
           Input::file('staffidcard')->move(public_path('consumer/staffid'),$staffidfilename);
           Input::file('pensionstatement')->move(public_path('consumer/pensionstatement'),$statementfilename);


         return Redirect::back()->with('success','Record is updated successfully');
    }





    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Consumer  $consumer
     * @return \Illuminate\Http\Response
     */
    public function show(Consumer $consumer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consumer  $consumer
     * @return \Illuminate\Http\Response
     */
    public function edit(Consumer $consumer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consumer  $consumer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consumer $consumer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consumer  $consumer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consumer $consumer)
    {
        //
    }
}
