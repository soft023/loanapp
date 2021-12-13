<?php

namespace App\Http\Controllers;

use App\Contractor;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;


class ContractorController extends Controller
{

      public function __construct()
    {
          $this->middleware(['auth', 'verified']);
    }


      public function updatecontractorprofile(){

           $tit1 = date("H");
           $tit2 = date("i");
           $tit3 = date("s");
           $timm = $tit1.$tit2.$tit3;

           $filenam = Input::file('contractawardletter')->getClientOriginalName();
           $letterfilename = $timm.$filenam;

           $filenamx = Input::file('directoridcard1')->getClientOriginalName();
           $director1idfilename = $timm.$filenamx;

           $filenamxx = Input::file('directoridcard2')->getClientOriginalName();
           $director2idfilename = $timm.$filenamxx;


           $id = Auth::user()->id;
           $contractorpro = Contractor::where('user_id', '=', $id)->first();
           $contractorpro->projecttype = Input::get('projecttype');
           $contractorpro->projectdescription = Input::get('projectdescription');
           $contractorpro->projectcurrentstage = Input::get('projectcurrentstage');
           $contractorpro->projectlocation = Input::get('projectlocation');
           $contractorpro->costofproject = Input::get('costofproject');
           $contractorpro->moneyspent = Input::get('moneyspent');
           $contractorpro->moneytospend = Input::get('moneytospend');
           $contractorpro->companyname = Input::get('companyname');
           $contractorpro->section = Input::get('section');
           $contractorpro->companyaddress = Input::get('companyaddress');
           $contractorpro->companyphone = Input::get('companyphone');
           $contractorpro->contractawardletter = $letterfilename;
           $contractorpro->directorname1 = Input::get('directorname1');
           $contractorpro->directoraddress1 = Input::get('directoraddress1');
           $contractorpro->directorphone1 = Input::get('directorphone1');
           $contractorpro->directorbvn1 = Input::get('directorbvn1');
           $contractorpro->directoridcard1 = $director1idfilename;
           $contractorpro->directorname2 = Input::get('directorname2');
           $contractorpro->directoraddress2 = Input::get('directoraddress2');
           $contractorpro->directorphone2 = Input::get('directorphone2');
           $contractorpro->directorbvn2 = Input::get('directorbvn2');
           $contractorpro->directoridcard2 = $director2idfilename; 
           $contractorpro->save();
         //return  Now time to save pics into their respective folders
           Input::file('directoridcard1')->move(public_path('contractor/director1id'),$director1idfilename);
           Input::file('directoridcard2')->move(public_path('contractor/director2id'),$director2idfilename);
           Input::file('contractawardletter')->move(public_path('contractor/contractletter'),$letterfilename);

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
     * @param  \App\Contractor  $contractor
     * @return \Illuminate\Http\Response
     */
    public function show(Contractor $contractor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contractor  $contractor
     * @return \Illuminate\Http\Response
     */
    public function edit(Contractor $contractor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contractor  $contractor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contractor $contractor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contractor  $contractor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contractor $contractor)
    {
        //
    }
}
