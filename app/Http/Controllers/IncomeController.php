<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use App\Models\Income;
use App\Models\IncomeHead;

use App\Models\EapanseHead;
use Auth;
use Illuminate\Http\Request;

class IncomeController extends Controller
{

    public function IncomeHead(){
        $incomes = DB::table('income_heads')->get();



        return view('admin.income.income_head',compact('incomes'));
    }
    public function CreateHead(){




      return view('admin.income.create_income_head');
  }


  public function AddIncomeHead(Request $request)
  {
      $validateData = $request->validate([
          'income_head' => 'required|unique:income_heads|max:255',
      ]);

      DB::table('income_heads')->insert([
          'income_head' => $request->income_head,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
      ]);

      return redirect()->back()->with('success', 'Income Head Inserted Successfully');
  }

  public function IncomeheadEdit($id)
{
    $incomeHead = DB::table('income_heads')->find($id);
    return view('admin.income.income_head_edit', compact('incomeHead'));
}


public function UpdateIncomeHead(Request $request, $id)
{
    $update = DB::table('income_heads')
        ->where('id', $id)
        ->update([
            'income_head' => $request->income_head,
            'updated_at' => Carbon::now()
        ]);

    return redirect()->route('income.head')->with('success', 'income Updated Successfully');
}

public function DeleteHead($id){
    DB::table('income_heads')
    ->where('id',$id)
    ->delete();
    return back()->with('success','Delete succesfull');
}


public function IncomeShow(){
    $incomes=Income::all();



    return view('admin.income.show_income',compact('incomes'));

    }

    public function CreateIncome(){
        $incomes = DB::table('income_heads')->get();






        return view('admin.income.create_income',compact('incomes'));
    }

    public function StoreIncome(Request $request){


        $validateData=$request->validate([
            'income_name'=>'required|unique:incomes|max:255',

        ]);


        Income::insert([
            'income_name' => $request->income_name,
            'income_head' => $request->income_head,
            'amount' => $request->amount,
            'income_textArea' => $request->income_textArea,
            'created_at' => Carbon::now()
        ]);

     return Redirect()->back()->with('success','income Inserted Successful');

     }
     public function IncomeEdit($id)
{


    $incomes = Income::find($id);

    return view('admin.income.edit', compact('incomes'));
}
public function UpdateIncome(Request $request,$id){
    $update=Income::find($id)->update([
        'income_name'=>$request->income_name,
        'income_head'=>$request->income_head,
        'amount'=>$request->amount,
        'income_textArea'=>$request->income_textArea,
    ]);
    return Redirect()->route('create.income')->with('success','income Updated Successful');
 }
 public function DeleteIncome($id){
    DB::table('incomes')->where('id',$id)->delete();
    return back()->with('ff','Delete succesfull');
 }



}
