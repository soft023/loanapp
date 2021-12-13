<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Admin;
use App\User;
use App\Contractor;
use App\Consumer;
use App\Trader;
use Auth;
use App\Loanhistory;
use Redirect;
use Validator;
use Session;


class AdminRoleController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

   

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/adminhome';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
     $this->middleware('auth:admin')->except('logout');
    }

   protected function guard()
    {
        return Auth::guard('admin');
    }
        
public function showallcustomer(){
       $customers =  User::paginate(10);
        return view('allcustomers')->with('customers',$customers);

}

public function shownewloanrequest(){
     $loanrequests =  Loanhistory::select('id','user_id','amountrequested','tenor','loanpurpose')->where('loanrequeststatus',"Pending")->paginate(10);
        return view('newapplications')->with('loanrequests',$loanrequests);
}

public function showallactiveloans(){
    $grants =  Loanhistory::select('id','user_id','amountgranted','tenor','reasonforyes','processedby','processeddate')->where('loanrequeststatus',"Granted")->paginate(10);
        return view('activeloans')->with('grants',$grants);
}

public function showallinactiveloans(){
    $inactive =   Loanhistory::select('id','user_id','amountgranted','tenor','reasonforyes','processedby','processeddate')->where('loanrequeststatus',"Deactivated")->paginate(10);
        return view('inactiveloans')->with('inactive',$inactive);
      
}

public function showalldeclinedloans(){
    $declined =  Loanhistory::select('id','user_id','amountrequested','reasonforno','processedby','processeddate')->where('loanrequeststatus',"Declined")->paginate(10);
        return view('declinedrequests')->with('declined',$declined);
      
}


public function showloangrantform($id){  
    
  return view('loangrantform')->with('user_id',$id);
}

public function showloandeclinedform($id){  
        return view('loandeclinedform')->with('user_id',$id);;
}

public function loangrantx(){

$username =  Session::get('username');
$id = Input::get('userid');
       
           $timm = date('Y-m-d H:i:s');
      
           $loanhistory = Loanhistory::find($id);
           $loanhistory->processedby =  $username;
           $loanhistory->processeddate = $timm;
           $loanhistory->amountgranted = Input::get('amountgranted');
           $loanhistory->reasonforyes = Input::get('reasonforyes');
           $loanhistory->loanrequeststatus = "Granted";
           $loanhistory->loanstatus = "Active";
           $loanhistory->save();
           return Redirect::back()->with('success','Record is updated successfully');
}


public function loandeclinex(){

$username =  Session::get('username');
$id = Input::get('userid');
       
           $timm = date('Y-m-d H:i:s');
           $loanhistory = Loanhistory::find($id);
           $loanhistory->processedby =  $username;
           $loanhistory->processeddate = $timm;
           $loanhistory->reasonforno = Input::get('reasonforno');
           $loanhistory->loanrequeststatus = "Declined";
           $loanhistory->loanstatus = "Inactive";
           $loanhistory->save();
           return Redirect::back()->with('success','Record is updated successfully');
}



public function deactivate($id){
           $username =  Session::get('username');
           $timm = date('Y-m-d H:i:s');
           $loanhistory = Loanhistory::find($id);
           $loanhistory->processedby =  $username;
           $loanhistory->processeddate = $timm;
           $loanhistory->loanstatus = "Inactive";
           $loanhistory->loanrequeststatus = "Deactivated";
           $loanhistory->save();
           return Redirect::back()->with('success','Record is updated successfully');
}




public function moreinfo($id){

  $userjob = User::select('jobclassification')->where('id',$id)->get();
  
  $userjob = $userjob[0]['jobclassification'];

  if ($userjob  == "Business"){

    $jobprofile = Trader::all()->where('user_id',$id);
    $userprofile = User::all()->where('id',$id);
    $view = "moreoftrader";

  }else if($userjob == "Contractor"){

    $jobprofile = Contractor::all()->where('user_id',$id);
    $userprofile = User::all()->where('id',$id);
    $view = "moreofcontractor";
  }else{

    $jobprofile = Consumer::all()->where('user_id',$id);
    $userprofile = User::all()->where('id',$id);
    $view = "moreofconsumer";
  }
  

  return view($view)->with('jobprofile',$jobprofile)->with('userprofile',$userprofile);

}


















// // Admin Logout Function
//        public function logout(){

//         Auth::guard('admin')->logout();      
//        return Redirect('/');
//    }



//    //THIS IS THE LOGIN PROCESSING FUNCTION
//     public function login(){
       
//         $data = Input::all();
//         $rule = array(     
//               'username' => 'required',
//               'password' => 'required|min:6'     
//             );
            
//         $validator = Validator::make($data,$rule);
//         if ($validator->fails()){
//             return Redirect::to('adminlogin');
//         }else{
       
         
       
//     if (Auth::guard('admin')->attempt(['username' =>Input::get('username'),'password' =>Input::get('password')],Input::get('remember'))){  

//          $fname= Admin::select('firstname')->where('username',Input::get('username'))->get();
//     return view('adminhome')->with(session([
//      'user'=> $fname[0]['firstname'],
//       'username'=> Input::get('username')
//    ])); 
    
//      }

//      $input = Input::except('password');
//          return redirect()
//          ->back()
//         ->withInput($input)
//         ->with('error','These credentials do not match our records.');
//     }

    
// }


}