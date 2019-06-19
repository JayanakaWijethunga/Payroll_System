<?php

namespace App\Http\Controllers;
use App\Base;
use Illuminate\Http\Request;
//use RealRashid\SweetAlert\Facades\Alert;
//Use Alert;
use App\User;
class UserRecordController extends Controller
{
    public function show()
{

    

//$emps=Emp::get();

//return view('emprec',['emps'=>$emps]);
$bases =Base::all();
return view('auth.userrec',compact('bases'));
}


public function delete($id){

    User::destroy($id);
    //Alert::warning('Warning Message', 'Optional Title');
    return redirect('userlist');
    
    }

/*public function addLevel1()
{
$emps =Emp::all();
return view('emp.addlevel1',compact('emps'));
}*/




/*public function showLoginForm()
    {
        return view('admin.login');
    }*/


}
