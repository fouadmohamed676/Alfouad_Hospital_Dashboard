<?php

namespace App\Http\Controllers\Pation;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Gender;
use App\Models\Hospital;
use App\Models\Local;
use App\Models\NationalityDoctor;
use App\Models\Pation;
use App\Models\Pation_Sick;
use App\Models\Sick;
use App\Models\SpecializationDoctor;
use Illuminate\Http\Request;

class PationController extends Controller
{
    public function pation_sick(){
        $sicks =Sick::all();
        return view('pation.pation_sick',compact('sicks'));
    }
    public function show(){
        $pations=Pation::where('status','1')->get();
        return view('pation.show',compact('pations'));
    }
    public function create(){

        $doctors=Doctor::where('status','1')->with('pation')->get();
        $specializations=SpecializationDoctor::with('specilization');
        $hospitals=Hospital::with('hospital')->get();
        $nationals=NationalityDoctor::with('nationality')->get();
        $genders=Gender::with('gender')->get();
        $locals=Local::with('locals')->get();
         return view('pation.create',compact('doctors','hospitals','specializations','nationals','genders','locals'));
    }
    public function save(Request $request){

        $validateData=$request->validate([
            'sick'=>'required:pation',
            'name'=>'required',
            'email' => 'email',
         ]);

            Pation::create($request->all());
            return redirect('/pation/show')->with('status','تمت إضافة المريض بنجاح ');

}

public function update($id){
        $pation=Pation::find($id);
        $doctors=Doctor::where('status','1')->with('pation')->get();
        $specializations=SpecializationDoctor::with('specilization');
        $hospitals=Hospital::with('hospital')->get();
        $nationals=NationalityDoctor::with('nationality')->get();
        $genders=Gender::with('gender')->get();
        $locals=Local::with('locals')->get();
    return view('pation.update',compact('pation','doctors','hospitals','specializations','nationals','genders','locals'));
    }

public function edit(Request $request,Pation $id){

    $id->update($request->all());

    // $student->section = $request->input('section');
    // $student->update();

    return redirect()->route('pation.show')->with('status','تم التعديل بنجاح ');

    }

public function destroy(Pation $id){
    $id->delete();
    return redirect()->route('pation.show')->with('error','تم الحذف بنجاح..');

    }





}
