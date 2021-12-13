<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Consumer;
use App\Contractor;
use App\Trader;

use Auth;
use Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;





class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
          $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


        public function jobdetails()
    {
        return view('jobdetail');
    }


        public function showuserprofile()
    {
        $id = Auth::user()->id;
         $userpro = User::select()->where('id',$id)->get();
        return view('userprofile')->with('userprofile',$userpro);
    }



        public function getaloan()
    {
        return view('applyforloan');
    }


        public function updateuserprofile(){
           $id = Auth::user()->id;
           $userpro = User::find($id);
           $userpro->title = Input::get('title');
           $userpro->maritalstatus = Input::get('maritalstatus');
           $userpro->noofdependant = Input::get('noofdependant');
           $userpro->phone = Input::get('phone');
           $userpro->address = Input::get('address');
           $userpro->dob = Input::get('dob');
           $userpro->howdidyouhearaboutus = Input::get('howdidyouhearaboutus');
           $userpro->nokfullname = Input::get('nokfullname');
           $userpro->relationshipwithnok = Input::get('relationshipwithnok');
           $userpro->nokphone = Input::get('nokphone');
           $userpro->save();
         //return  
         return Redirect::back()->with('success','Record is updated successfully');
    }

 

        public function showjobprofile(){
            $job = Auth::User()->jobclassification;
             $id = Auth::user()->id;

            if ($job == "Business") {
               $view = "tradersform";
               $profile = Trader::select()->where('user_id',$id)->get();
            }elseif ($job =="Contractor") {
                 $view = "contractorform";
                  $profile = Contractor::select()->where('user_id',$id)->get();
            }else {
                 $view = "consumerform";
                  $profile = Consumer::select()->where('user_id',$id)->get();
            }
            return view($view)->with('profile',$profile);
        }
}
