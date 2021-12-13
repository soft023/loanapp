<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Consumer;
use App\Trader;
use App\Contractor;
use App\Loanhistory;
use Redirect;

class AdminHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('/adminhome');
    }




public function deletecustomer(request $request)
{
    $id = $request->sid;
    $jobclass = $request->jobclass;

    switch ($jobclass) {
        case 'Consumer':
           User::find($id)->delete();
           Consumer::where('user_id', $id)->delete();
           Loanhistory::where('user_id', $id)->delete();
            break;

        case 'Business':
           User::find($id)->delete();
           Trader::where('user_id', $id)->delete();
           Loanhistory::where('user_id', $id)->delete();
            break;

        default:
           User::find($id)->delete();
           Contractor::where('user_id', $id)->delete();
           Loanhistory::where('user_id', $id)->delete();
            break;
    }
    return Redirect::back()->with("success","Profile Deleted Successfully");
}
    // Customer::find($id)->delete();
    // return redirect('/ro/rejectedloan')->with("success","Loan Request Deleted Successfully");


 
}
