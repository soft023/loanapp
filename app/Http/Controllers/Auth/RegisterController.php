<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Trader;
use App\Contractor;
use App\Consumer;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],      
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
       return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'jobclassification' => $data['jobclassification'],
            'password' => Hash::make($data['password']),
        ]);
       
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);
        if( $user->jobclassification == "Business"){
            
             $trader = new Trader;
             $trader->user_id =$user->id;
             $trader->save();

         }elseif ($user->jobclassification == "Contractor") {
             $contractor = new Contractor;
             $contractor->user_id =$user->id;
             $contractor->save();
         }else{

          $consumer = new Consumer;
           $consumer->user_id =$user->id;
            $consumer->save();
         }
        return $this->registered($request, $user)
               ?: redirect($this->redirectPath());
    }
}
