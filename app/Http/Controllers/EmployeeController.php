<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Employee;
use App\Models\User;

class EmployeeController extends Controller
{
    public function EmployeeHead(){
        $users=User::all();

        $employee_name=DB::table('employees')->get();


        return view('admin.employee.employee_table_head',compact('users','employee_name'));
    }


    public function StoreEmp (Request $request)
{
    $validateData = $request->validate([
        'emp_name' => 'required|unique:employees|max:255',
    ]);

    DB::table('employees')->insert([
        'emp_name' => $request->emp_name,
        'emp_place'=>$request->emp_place,
        'emp_join'=>$request->emp_join,
        'emp_amount'=>$request->emp_amount,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ]);

    return redirect()->route('employee.show');

}
public function showEmp(){
    $employees = DB::table('employees')->get();




    return view('admin.employee.show_employee_table',compact('employees'));
}




public function Edit($id)
{


    $employees = Employee::find($id);

    return view('admin.employee.edit', compact('employees'));
}

public function Update(Request $request,$id){
   $update=Employee::find($id)->update([
    'emp_name' => $request->emp_name,
    'emp_place'=>$request->emp_place,
    'emp_join'=>$request->emp_join,
    'emp_amount'=>$request->emp_amount,
   ]);
   return Redirect()->route('employee.show')->with('success','employee Updated Successful');
}

public function Delete($id){
   DB::table('employees')->where('id',$id)->delete();
   return back()->with('ff','Delete succesfull');
}








}
