<?php

namespace App\Http\Controllers\Duty;

use App\Http\Controllers\Controller;
use App\Models\Clinck;
use App\Models\Doctor;
use App\Models\Duty;
use App\Models\Hospital;
use App\Models\Time;
use Illuminate\Http\Request;
class DutyController extends Controller
{
    public function show(){
        $duty=Duty::where('status', 1)->get();
        $doctors=Doctor::where('status','1')->with('dutys')->get();
        return view('duty.show',compact('duty','doctors'));
    }
    public function create(){
        $hospital=Hospital::where('status','1')->with('hospital')->get();
        $doctors=Doctor::where('status','1')->with('duty')->get();
        $days=Time::with('day')->get();
        $clincks=Clinck::with('clinck')->get();
        return view('duty.create',compact('doctors','hospital','days','clincks'));
    }
    public function update($id){
        $duty=Duty::find($id);
        $doctor=Doctor::where('status','1')->with('duty')->get();
        $days=Time::with('day')->get();
        return view('duty.update',compact('duty','doctor','days'));
    }
    public function save(Request $request){

        $validateData=$request->validate([
            'doctor_id'=>'required:duty',

         ]);

            Duty::create($request->all());
            return redirect('/duty/show')->with('status','تمت إضافة الموعد بنجاح ');

}
public function edit(Request $request,Duty $id){
    $id->update($request->all());
    return redirect()->route('duty.show')->with('status','تم التعديل بنجاح ');
}
public function destroy(Duty $id){
    $id->delete();
    return redirect()->route('duty.show')->with('error','تم الحذف بنجاح..');;
}

}
