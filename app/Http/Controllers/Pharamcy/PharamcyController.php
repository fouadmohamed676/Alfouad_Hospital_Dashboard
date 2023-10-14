<?php

namespace App\Http\Controllers\Pharamcy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\NationalityDoctor;
use App\Models\SpecializationDoctor;
use App\Models\Pharamcy;
use App\Models\Staff;
use App\Models\Staff_Pharmacy;

class PharamcyController extends Controller
{


    public function show(){

        $staffs=Staff::with('pharamcy')->get();
        $pharamcys=Pharamcy::all();
        // return abort('404');
        return view('pharmacy.show',compact('pharamcys','staffs'));
    }

    public function create(){

        $staffs=Staff::with('pharamcy')->get();
        $hospital=Hospital::with('hospital')->get();
        $speci=SpecializationDoctor::with('specilization')->get();
        $nationality=NationalityDoctor::with('nationality')->get();
        return view('pharmacy.create',compact('hospital','speci','nationality','staffs'));
    }

    public function save(Request $request){
        // return $request;
        $validateData=$request->validate([
            'title'=>'required:pharmacy',
            'name'=>'required',
            'email' => 'email',
         ]);
        Pharamcy::create($request->all());
        return redirect('/pharmacy/show')->with('status','تمت إضافة الصيدليه بنجاح');
}
public function update($id){
    $pharamcy=Pharamcy::find($id);
    return view('pharmacy.update',compact('pharamcy'));
}
public function edit(Request $request,$id){

    $pharmacy=Pharamcy::find($id);
    $pharmacy->name = $request->input('name');
    $pharmacy->phone = $request->input('phone');
    $pharmacy->title = $request->input('title');
    $pharmacy->time_work = $request->input('time_work');
    $pharmacy->update();

    if($pharmacy){

        return redirect()->route('pharmacy.show')->with('status','تم تعديل الصيدلية بنجاح');

  }else{

       return back()->with('fail', '  خطاْ ..!');
}
}
public function destroy($id){
    $pharamcy=Pharamcy::find($id);
    $pharamcy->delete();
    return redirect()->route('pharmacy.show')->with('fail','تم الحذف بنجاح..');
}

public function show_staff($pharmacy_id){
    $pharmacys=Pharamcy::all();
    $staffs=Staff::with('pharamcy')->get();
    $pharmacy=Pharamcy::find($pharmacy_id);
    $staff=Staff_Pharmacy::with('staff')->where('pharmacy_id',$pharmacy_id)->get();
    return view('pharmacy.staff_pharmacy',compact('staff','pharmacy','pharmacys','staffs'));
}
public function show_staff_($pharmacy_id){

    $pharmacy=Pharamcy::find($pharmacy_id);
    $staff=Staff_Pharmacy::with('staff')->where('pharmacy_id',$pharmacy_id)->get();
    return ['status'=>'success','response'=>json_decode($pharmacy),'staff'=>$staff];

}
// insert many to many relation 
public function staff_pharm(Request $request){
        $pharamcy =Pharamcy::find($request->pharmacy_id);
        if(!$pharamcy)
        return abort('404');
        $pharamcy -> staffs() ->syncWithoutDetaching($request -> staff_id);
        return redirect('/pharmacy/show')->with('status','تمت إضافة الموظفين بنجاح');
} 
//end of relation
public function pharmacy_staff(){
    $pharamcy=Staff::with(['pharamc'=>function($q){
        $q->select('id','name','title');
    }])->find(1);
      return $pharamcy;
}

}
