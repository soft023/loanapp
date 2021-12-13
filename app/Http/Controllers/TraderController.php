<?php

namespace App\Http\Controllers;

use App\Trader;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class TraderController extends Controller
{

      public function __construct()
    {
          $this->middleware(['auth', 'verified']);
    }


    public function updatetraderprofile(){
           $tit1 = date("H");
           $tit2 = date("i");
           $tit3 = date("s");
           $timm = $tit1.$tit2.$tit3;

           $filenam = Input::file('passport')->getClientOriginalName();
           $passportfilename = $timm.$filenam;

           $filenamx = Input::file('bankstatement')->getClientOriginalName();
           $statementfilename = $timm.$filenamx;

           $filenamxx = Input::file('otherid')->getClientOriginalName();
           $otheridfilename = $timm.$filenamxx;

           $id = Auth::user()->id;
           $traderpro = Trader::where('user_id', '=', $id)->first();
           $traderpro->businessage = Input::get('businessage');
           $traderpro->weeklysales = Input::get('weeklysales');
           $traderpro->refreename1 = Input::get('refreename1');
           $traderpro->refreerelationship1 = Input::get('refreerelationship1');
           $traderpro->refreeaddress1 = Input::get('refreeaddress1');
           $traderpro->refreephone1 = Input::get('refreephone1');
           $traderpro->refreename2 = Input::get('refreename2');
           $traderpro->refreerelationship2 = Input::get('refreerelationship2');
           $traderpro->refreeaddress2 = Input::get('refreeaddress2');
           $traderpro->refreephone2 = Input::get('refreephone2');
           $traderpro->bankaccountname = Input::get('bankaccountname');
           $traderpro->bankaccountnumber = Input::get('bankaccountnumber');
           $traderpro->bvn = Input::get('bvn');
           $traderpro->bankstatement =  $statementfilename;
           $traderpro->passport =  $passportfilename;
           $traderpro->otherid =    $otheridfilename ;
           $traderpro->save();
         //return  Now time to save pics into their respective folders
           Input::file('passport')->move(public_path('trader/passport'),$passportfilename);
           Input::file('otherid')->move(public_path('trader/otherid'),$otheridfilename);
           Input::file('bankstatement')->move(public_path('trader/bankstatement'),$statementfilename);

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
     * @param  \App\Trader  $trader
     * @return \Illuminate\Http\Response
     */
    public function show(Trader $trader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trader  $trader
     * @return \Illuminate\Http\Response
     */
    public function edit(Trader $trader)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trader  $trader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trader $trader)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trader  $trader
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trader $trader)
    {
        //
    }
}
