<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Hospital_Doctors;
use App\Models\Local;
use App\Models\SpecializationHospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function show(){
        $hospital=Hospital::where('is_deleted',0)->get();
        $count=$hospital->count();
        $locals=Local::with('locals')->get();
        $hospitals=SpecializationHospital::with('specialization')->get();
        $specializations=SpecializationHospital::with('specialization')->get();
        return view('hospital.show',compact('hospitals','count','hospital','specializations','locals'));
    }

    public function count(){
        $hospital=Hospital::where('is_deleted',0)->get();
        $count=$hospital->count();
        return view('include.sidebar',compact('count'));
    }
    public function create(){
        $specializations=SpecializationHospital::with('specialization')->get();
        $locals=Local::with('locals')->get();
        return view('hospital.create',compact('specializations','locals'));
    }
    public function save(Request $request){
        $validateData=$request->validate([
            'dis'=>'required:hospital',
            'address'=>'required',
         ]);
            Hospital::create($request->all());
            return redirect('/hospital/show')->with('status','تمت إضافة المستشفى بنجاح ');
        }
    public function update($id){
        $hospital=Hospital::find($id);
        $hospitals=SpecializationHospital::with('specialization')->get();
        $locals=Local::with('locals')->get();
        return view('hospital.update',compact('hospital','hospitals','locals'));
    }
    public function edit(Request $request,Hospital $id){
        $id->update($request->all());
        return redirect()->route('hospital.show')->with('status','تم التعديل بنجاح ');
    }
    public function destroy($id){
         $delete=Hospital::find($id);
         $delete->delete();
         if($delete)
          return redirect()->route('hospital.show')->with('error','تم الحذف بنجاح..');
    }

    public function doctors($id){
        $doctors_= Doctor::all();
        $hospitals=Hospital::all();
        $doctors=Hospital_Doctors::with('doctors')->where('hospital_id',$id)->get();
        return view('hospital.doctors',compact('doctors','hospitals','doctors_'));
    }
    
    public function addDoctors(Request $request){
        // return $request;
            $doctor =Hospital::find($request->hospital_id);
            if(!$doctor)
            return abort('404');
            $doctor -> hospital() ->syncWithoutDetaching($request ->doctor_id);
        return redirect()->route('hospital.show')->with('status','تم التعديل بنجاح ');
        }

    public function hospitalDoctor($id){
        $data=Hospital_Doctors::with('doctors')->where('hospital_id',$id)->get();
        return ['response'=>json_decode($data),'status'=>'success'];
    } 

}
