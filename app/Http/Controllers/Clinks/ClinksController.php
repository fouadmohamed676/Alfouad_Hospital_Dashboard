<?php

namespace App\Http\Controllers\Clinks;

use App\Http\Controllers\Controller;
use App\Models\Clinck;
use App\Models\Local;
use Illuminate\Http\Request;

class ClinksController extends Controller
{
    public function show(){

        // $clinks=DB::table('clinics')
        // ->join('local','local.id','=','clinics.local_id')
        // ->select('clinics.*','clinics.name','local.name')
        // ->where('clinics.status',1)
        // ->get();
        // $local=Local::with('clinck')->get();
        $clinks=Clinck::all();
        return view('clink.show',compact('clinks'));
    }
    public function create (){
        $locals=Local::with('clinck')->get();
        return view('clink.create',compact('locals'));
    }

    public function update($id){

        $clink=Clinck::find($id);
        $locals=Local::with('clinck')->get();
        return view('clink.update',compact('clink','locals'));
    }

    public function save(Request $request){
        $validateData=$request->validate([
            'name'=>'required:clinics',
         ]);
            Clinck::create($request->all());
            return redirect('/clink/show')->with('status','تمت إضافة المستوصف بنجاح ');
    }


    public function edit(Request $request,Clinck $id){
       $update= $id->update($request->all());
if($update){
    return redirect()->route('clink.show')->with('status','تم التعديل بنجاح ');

}
else{
    return redirect()->route('clink.show')->with('fail','خطأ');

}
          }
    public function destroy($id){

        $clinks=Clinck::find($id);

        return $clinks->status;

//    }
            // if('status'==1)
            // {

            //     $clinks->status = $request->input('status',0);
            //     $clinks->update();
            //     return $clinks->status;
            // }
            //  return $clinks;


        //     return $clinks->status;
            // $clinks-> update(['status'=>1]);
        // ->where('clinics.status',2)
        // ->update(['clinics.status'=>1]);
        // $update= Clinck::find($id);
        // if(where('status',1)){

        //     update(['status'=>2]);
        // }
        // else
        // update(['status'=>0]);
        // ->where('status',1)
        // $update->update(['status'=>2]);
        // update();
        // $id-> update($id);
        // $id->delete();
        // return redirect()->route('clink.show')->with('error','تم الحذف بنجاح..');;
    }

public function delete(Request $request,$id){

    return $request;
    // $update= $id->update($request->all());
}
public function del_update(Request $request){

    return $request;
}
}
