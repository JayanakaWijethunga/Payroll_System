<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use RealRashid\SweetAlert\Facades\Alert;
//Use Alert;
use App\Admin;
class AdminRecordController extends Controller
{
    public function show()
{

    

//$emps=Emp::get();

//return view('emprec',['emps'=>$emps]);
$admins =Admin::all();
return view('admin.adminrec',compact('admins'));
}


public function delete($id){

Admin::destroy($id);
//Alert::warning('Warning Message', 'Optional Title');
return redirect('adminlist');

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
