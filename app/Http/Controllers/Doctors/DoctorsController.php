<?php

namespace App\Http\Controllers\Doctors;

use App\Http\Controllers\Controller;
use App\Models\Clink;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Doctors_Duty;
use App\Models\Duty;
use App\Models\Hospital;
use App\Models\Gender;
use App\Models\Local;
use App\Models\NationalityDoctor;
use App\Models\SpecializationDoctor;
use App\Models\Time;

class DoctorsController extends Controller
{

    public function show(){
        $doctors=Doctor::where('status','1')->get();
        $specializations=SpecializationDoctor::all();
        $national=NationalityDoctor::all();
        $clinks=Clink::all();
        $locals=Local::all();
        $count=Doctor::count();
        return view('doctors.show',compact('doctors','count'));
   }


   public function display($id){
    $doctor=Doctor::find($id);
    $specializations=SpecializationDoctor::with('specialization')->get();
    $hospital=Hospital::where('is_deleted','1')->with('hospital')->get();
    $national=NationalityDoctor::all();
    $clinks=Clink::with('clink')->get();
    $count=Doctor::count();
    $genders=Gender::with('gender');
    $local=Local::with('locals')->get();
    return view('doctors.details',compact('doctor','hospital','specializations','national','clinks','count','genders','local'));
}

    public function create(){
        $hospitals=Hospital::all();
        $genders=Gender::all();
        $specializations=SpecializationDoctor::all();
        $nationalities=NationalityDoctor::all();
        $clinks=Clink::all();
        $duty=Time::all();
        return view('doctors.create',compact('hospitals','specializations','nationalities','genders','clinks','duty'));

    }

    public function save(Request $request){
        $validateData=$request->validate([
            'title'=>'required:docotrs',
            'name'=>'required',
            'email' => 'email',
         ]);
            Doctor::create($request->all());
            return redirect('/doctors/show')->with('status','تمت إضافة الطبيب بنجاح ');
}
//show time work of doctors
public function doctor_duty($id){
    $doctors=Doctor::all();
    $times=Time::all();
    $duties=Doctors_Duty::with('duty')->where('doctor_id',$id)->get();
    return $duties;
    return view('doctors.doctors',compact('duties','doctors','times'));
}
//insert time work to doctors
public function times_doctors(Request $request){

    $doctor =Doctor::find($request->doctor_id);
    if(!$doctor)
    return abort('404');

    $doctor -> times() ->syncWithoutDetaching($request -> time_id);

    return redirect('/doctors/show')->with('status','تمت إضافة أيام العمل بنجاح ');
}

// end of insert
public function update($id){
        $doctors=Doctor::find($id);
        $hospital=Hospital::where('status','1')->with('hospital')->get();
        $specializations=SpecializationDoctor::with('specilization')->get();
        $nation=NationalityDoctor::with('nationality')->get();
        $genders=Gender::with('gender')->get();
    return view('doctors.update',compact('hospital','specializations','nation','doctors','genders'));
}
public function edit(Request $request,Doctor $id){
       $id->update($request->all());
       return redirect()->route('doctors.show')->with('status','تم التعديل بنجاح ');
}
public function destroy(Doctor $id){
    $id->delete();
    return redirect()->route('doctors.show')->with('error','تم الحذف بنجاح..');;
}

}
