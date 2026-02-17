<?php

namespace App\Http\Controllers\Forword;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Patients;
use App\Models\SpecializationHospital;
use App\Models\Transfers;
use Illuminate\Http\Request;

class TransferController extends Controller
{

    public function show(){
        $transfers=Transfers::all();
        // return ['response'=>json_decode($forwords),'status'=>'success'];
        return view('forword.show',compact('transfers'));
    }
     public function create(){
        $doctors=Doctor::where('status',1)->with('transfer')->get();
        $pations=Patients::where('status',1)->with('patients')->get();
        $Splize_hos_from=SpecializationHospital::with('Splize_hos_from')->get();
        $Splize_hos_to=SpecializationHospital::with('Splize_hos_to')->get();
        return view('forword.create',compact('doctors','pations','Splize_hos_from','Splize_hos_to'));
     }
     public function save(Request $request){
     Transfers::create($request ->all());
     return redirect('/transfer/show')->with('status','تمت إضافة التحويل بنجاح ');
     }
     public function update($id){
        return view('transfer.update');
     }
     public function edit(Request $request,Transfers $id){
        $id->update($request->all());
        return redirect()->route('transfer.show')->with('status','تم التعديل بنجاح ');
    }
     public function destroy(Transfers $id){
        $id->delete();
        return redirect()->route('/transfer/show')->with('error','تم الحذف بنجاح..');;
    }

}
