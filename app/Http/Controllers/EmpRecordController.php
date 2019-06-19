<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use RealRashid\SweetAlert\Facades\Alert;
//Use Alert;
use App\Emp;
use App\Base;
class EmpRecordController extends Controller
{
    public function show()
{

    

//$emps=Emp::get();

//return view('emprec',['emps'=>$emps]);
$bases =Base::all();
return view('emprec',compact('bases'));
}


public function delete($id){

Base::destroy($id);
//Alert::warning('Warning Message', 'Optional Title');
return redirect('emplist');

}






/*public function showLoginForm()
    {
        return view('admin.login');
    }*/


}
