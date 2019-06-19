<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use Mail;
use App\Mail\verifyEmailA;

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
    protected $redirectTo = 'adminlist';
    
     /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('admin.register');
    }

  
   


   

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data,


        [
            'emp_id' => ['required', 'string', 'max:255'],

           'name' => ['required', 'string', 'max:255'],

           'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
           
            'password' => ['required', 'string', 'min:8', 'confirmed'],

          
       ],
       [
           'name.required' => 'Username is required.',
           
           'email.required' => 'E-mail is required.',
           'email.email' => 'Please check the entered E-mail.',
           'email.exists' => 'This email is already registered in the system.',
           
       ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Admin
     */
    protected function create(array $data)
    {
        $admin= Admin::create([
            'id' => $data['emp_id'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'verifyToken' => Str::random(40),
        ]);

        $thisUser=Admin::findOrFail($admin->id);
        $this->sendEmail($thisUser);
        
        return $admin;

    }


    public function verifyEmailFirst(){

        return view('email.verifyEmailFirst');

    }

    public function sendEmail($thisUser){

        Mail::to($thisUser['email'])->send(new verifyEmailA($thisUser));

    }

    public function sendEmailDoneA($email,$verifyToken){

        $admin=Admin::where(['email'=>$email,'verifyToken'=>$verifyToken])->first() ;
           if($admin){
                Admin::where(['email'=>$email,'verifyToken'=>$verifyToken])->update(['status'=>'1','verifyToken'=>NULL]);
                return redirect(route('admin.login')); 
           }else{
            return 'error';  
           }
       }
    

    protected function guard()
    {
        return Auth::guard('admin');
    }
   

}
