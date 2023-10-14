<?php

namespace App\Http\Controllers\Forword;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Forword;
use App\Models\Pation;
use App\Models\SpecializationHospital;
use Illuminate\Http\Request;

class ForwordController extends Controller
{

    public function show(){
        $forwords=Forword::all();
        // return ['response'=>json_decode($forwords),'status'=>'success'];
        return view('forword.show',compact('forwords'));
    }
     public function create(){
        $doctors=Doctor::where('status',1)->with('forword')->get();
        $pations=Pation::where('status',1)->with('pation')->get();
        $Splize_hos_from=SpecializationHospital::with('Splize_hos_from')->get();
        $Splize_hos_to=SpecializationHospital::with('Splize_hos_to')->get();
        return view('forword.create',compact('doctors','pations','Splize_hos_from','Splize_hos_to'));
     }
     public function save(Request $request){
     Forword::create($request ->all());
     return redirect('/forword/show')->with('status','تمت إضافة التحويل بنجاح ');
     }
     public function update($id){
        return view('forword.update');
     }
     public function edit(Request $request,Forword $id){
        $id->update($request->all());
        return redirect()->route('forword.show')->with('status','تم التعديل بنجاح ');
    }
     public function destroy(Forword $id){
        $id->delete();
        return redirect()->route('/forword/show')->with('error','تم الحذف بنجاح..');;
    }

}
