<?php

namespace App\Http\Controllers\Specializations;

use App\Http\Controllers\Controller;
use App\Models\SpecializationHospital;
use Illuminate\Http\Request;

class SpecializationsController extends Controller
{
  public function show(){
    $specializations=SpecializationHospital::all();
    // return $specializations;
    return view('specializations.show',compact('specializations'));
  }
  public function create(){
    return view('specializations.create');
  }

  public function save(Request $request){

    $validateData=$request->validate([
        'name'=>'required:specializationhospital',
     ]);

        SpecializationHospital::create($request->all());
        return redirect('/Specializations/show')->with('status','تمت إضافة التخصص بنجاح ');

}
 public function update($id){

    $specialization=SpecializationHospital::find($id);
    return view('specializations.update',compact('specialization'));

 }
 public function edit(Request $request,SpecializationHospital $id){

    $id->update($request->all());
    return redirect('/Specializations/show')->with('status','تمت تعديل التخصص بنجاح ');

 }
 public function destroy($id){
    $specializations=SpecializationHospital::find($id);
    return redirect('/Specializations/show')->with('erorr','تمت حذف التخصص بنجاح ');

 }

}
