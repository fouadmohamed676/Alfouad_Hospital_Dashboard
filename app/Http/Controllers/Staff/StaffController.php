<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\CarAmpolance;
use Illuminate\Http\Request;
use App\Models\Pharamcy;
use App\Models\Staff;
use App\Models\Gender;
use App\Models\Staff_Pharmacy;

class StaffController extends Controller
{
    // Pharmacy

    public function show(){

        $data=Staff::with('ampolnce')->get();
        return view('staff.show',compact('data'));

    }
    public function create(){
        $genders=Gender::with('gender')->get();
        $pharmacys=Pharamcy::with('staff')->get();
        return view('staff.create',compact('pharmacys','genders'));

    }
    public function pharmaces($id){
        $staff=Staff_Pharmacy::with('pharmacy')->where('staff_id',$id)->get();
        return view('staff.staffs',compact('staff'));
    }
    public function car($id){
        $car=CarAmpolance::where('staff_id',$id)->get();
        return $car;
        return view('staff.staffs',compact('staff'));
    }
    public function save(Request $request){

        $validateData=$request->validate([
            'title'=>'required:staff',
            'name'=>'required',
            'email' => 'email',
         ]);

        $data=Staff::create($request->all());


        if($data){
            return redirect('/staff/show')->with('status','تمت إضافة الموظف');
         }else{
            return back()->with('fail', ' Something Wrong ..!');
        }

}
public function update($id){

    $staffs=Staff::find($id);
    return view('staff.update',compact('staffs'));

}
public function edit(Request $request,Staff $id){
    $update= $id->update($request->all());
        if($update){
            return redirect()->route('staff.show')->with('status','تم التعديل بنجاح ');
    }else{
            return back()->with('fail', ' Something Wrong ..!');
        }

}

public function destroy($id){
        $data=Staff::find($id);
        $data->delete();
        return redirect()->route('staff.show')->with('fail','تم الحذف بنجاح..');
}
}
