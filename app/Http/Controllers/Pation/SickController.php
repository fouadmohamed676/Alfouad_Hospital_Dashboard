<?php

namespace App\Http\Controllers\Pation;

use App\Http\Controllers\Controller;
use App\Models\Pation_Sick;
use App\Models\Sick;
use Illuminate\Http\Request;

class SickController extends Controller
{
    public function show(){
        $sicks =Pation_Sick::all();
        return view('pation.pation_sick',compact('sicks'));
    } 

    public function save(Request $request){

            Sick::create($request->all());
            return redirect('/pation/pation_sick')->with('status','تمت إضافة المرض بنجاح ');

    }
    public function update($id){
        $sick=Sick::find($id);
        return view('pation.update_sick',compact('sick'));

}
    public function edit(Request $request,Sick $id){
        return $request;
        $id->update($request->all());
        return redirect('/pation/pation_sick')->with('status','تم تعديل المرض بنجاح ');
}
    public function delete(Request $request,Sick $id){
        
    }
}
