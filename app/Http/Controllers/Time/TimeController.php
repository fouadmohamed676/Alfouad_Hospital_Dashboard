<?php

namespace App\Http\Controllers\Time;

use App\Http\Controllers\Controller;
use App\Models\Time;
use Illuminate\Http\Request;

class TimeController extends Controller
{
    public function show(){
        $times=Time::all();
       return view('time.show',compact('times'));
    }
    public function update($id){

        $time=Time::find($id);

        return view('time.update',compact('time'));
    }


    public function save(Request $request){

        $validateData=$request->validate([
            'name'=>'required:time_work',
         ]);

         Time::create($request->all());
            return redirect('/time/show')->with('status','تمت إضافة اليوم بنجاح ');

}

public function edit(Request $request,Time $id){
   $id->update($request->all());
    return redirect()->route('time.show')->with('status','تم التعديل بنجاح ');
}
public function delete(Time $id){
    $id->is_deleted=0;
    $id->save();
    return redirect()->route('time.show')->with('error','تم الحذف بنجاح..');;
}
public function restore(Time $id){
    $id->is_deleted=1;
    $id->save();
    return redirect()->route('time.show')->with('status','تم التفعيل بنجاح..');;
}

}
