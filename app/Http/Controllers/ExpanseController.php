<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\exp_head;
use App\Models\Expanse;

class ExpanseController extends Controller
{
    public function ExpHead(){
        $expHeads=DB::table('exp_heads')->get();


    return view('admin.expanse.expansHead',compact('expHeads'));

    }

    public function CreateHead(){




      return view('admin.expanse.createExpHead');
  }




    public function AddExpHead(Request $request)
    {
        $validatedData = $request->validate([
            'exp_head' => 'required|unique:exp_heads|max:255',
        ]);

        DB::table('exp_heads')->insert([
            'exp_head' => $request->exp_head,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return redirect()->back()->with('success', 'Expense Head Inserted Successfully');
    }


    public function ExpheadEdit($id)
{
    $expHead = DB::table('exp_heads')->find($id);
    return view('admin.expanse.exp_head_edit', compact('expHead'));
}

public function UpdateExpHead(Request $request, $id)
{
    $update = DB::table('exp_heads')
        ->where('id', $id)
        ->update([
            'exp_head' => $request->exp_head,
            'updated_at' => Carbon::now()
        ]);

    return redirect()->route('expanse.head')->with('success', 'Category Updated Successfully');
}
public function DeleteHead($id){
    DB::table('exp_heads')
    ->where('id',$id)
    ->delete();
    return back()->with('ff','Delete succesfull');
}









public function ExpShow(){
    $expanses=Expanse::all();



    return view('admin.expanse.show_exp',compact('expanses'));

    }

    public function CreateExp(){
        $expanses = DB::table('exp_heads')->get();






        return view('admin.expanse.create_exp',compact('expanses'));
    }







public function StoreExp(Request $request){


   $validateData=$request->validate([
       'exp_name'=>'required|unique:expanses|max:255',

   ]);


   Expanse::insert([
       'exp_name'=>$request->exp_name,
       'exp_head'=>$request->exp_head,
       'amount'=>$request->amount,
       'exp_textArea'=>$request->exp_textArea,
       'created_at'=>Carbon::now()
   ]);
return Redirect()->back()->with('success','Expanses Inserted Successful');

}



public function ExpEdit($id)
{

    $expHeads=DB::table('exp_heads')->get();
    $expanses = Expanse::find($id);




    return view('admin.expanse.edit', compact(['expanses','expHeads']));
}

public function UpdateExp(Request $request,$id){
   $update=Expanse::find($id)->update([
       'exp_name'=>$request->exp_name,
       'exp_head'=>$request->exp_head,
       'amount'=>$request->amount,
       'exp_textArea'=>$request->exp_textArea,
   ]);
   return Redirect()->route('create.expanse')->with('success','Category Updated Successful');
}

public function DeleteExp($id){
    DB::table('expanses')
    ->where('id', $id)
    ->delete();
    return back()->with('ff', 'Delete successful');
 }








}
