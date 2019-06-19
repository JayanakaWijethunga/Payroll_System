<?php

namespace App\Http\Controllers\Emp;
use App\Base;
use App\Emp;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use Mail;
use App\Mail\verifyAEmail;
use Session;


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
    protected $redirectTo = 'emplist';
    
     /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('emp.register');
    }

  
   


   

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:emp');
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
            'ssn' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'dob' => ['required'],
            'addl1' => ['required', 'string', 'max:255'],
            'addl2' => ['required', 'string', 'max:255'],
            'addl3' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:emps'],
            'phone1' => ['required', 'string', 'max:255'],
            'obranch' => ['required', 'string', 'max:255'],
            'dept' => ['required', 'string', 'max:255'],
            'des' => ['required', 'string', 'max:255'],
            'fixed_allowance' => ['required', 'string', 'max:255'],
            'fixed_deduction' => ['required', 'string', 'max:255'],
            'bbranch' => ['required', 'string', 'max:255'],
            'bank' => ['required', 'string', 'max:255'],
            'acc' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

           
        ],
        [
            'ssn.required' => 'SSN is required.',
            'name.required' => 'Username is required.',
            'first_name.required' => 'First name is required.',
            'last_name.required' => 'Last name is required.',
            'dob.required' => 'Please insert date of birth.',
            'addl1.required' => 'Street is required.',
            'addl2.required' => 'City is required.',
            'addl3.required' => 'Distric is required.',
            'email.required' => 'E-mail is required.',
            'email.email' => 'Please check the entered E-mail.',
            'email.exists' => 'This email is already registered in the system.',
            'phone1.required' => 'Phone number is required.',
            'obranch.required' => 'Select the assign branch.',
            'dept.required' => 'Select the department.',
            'des.required' => 'Select the designation.',
            'fixed_allowance.required' => 'Fixed allowance is required.',
            'fixed_deduction.required' => 'Fixed deduction is required.',
            'bbranch.required' => 'Select the related branch.',
            'bank.required' => 'Select the bank.',
            'acc.required' => 'Account number is required.',
            'password.required' => 'Password is required.',
       ]
    );

        
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Emp
     */
 
    protected function create(array $data)
    {
        $emp=Emp::create([
            'ssn' => $data['ssn'],
            'email' => $data['email'],
        ]);

        

        

        $base=Base::create([
            'ssn' => $data['ssn'],
            'email' => $data['email'],
            
            'name' => $data['name'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'date_of_birth' => $data['dob'],
            'gender' => $data['gender'],
            'street' => $data['addl1'],
            'city' => $data['addl2'],
            'distric' => $data['addl3'],

            'phone1' => $data['phone1'],
            'phone2' => $data['phone2'],
            'obranch' => $data['obranch'],
            'department' => $data['dept'],
            'designation' => $data['des'],

            'fixed_allowance' => $data['fixed_allowance'],
            'fixed_deduction' => $data['fixed_deduction'],
            'is_OT_allowed' => $data['is_OT_allowed'],
            'bank' => $data['bank'],
            'bbranch' => $data['bbranch'],
            'acc' => $data['acc'],
            'password' => bcrypt($data['password']),
        ]);

        $emp->base()->save($base);
    }

    

    protected function guard()
    {
        return Auth::guard('emp');
    }
   

}
