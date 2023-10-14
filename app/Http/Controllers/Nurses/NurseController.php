<?php

namespace App\Http\Controllers\Nurses;

use App\Http\Controllers\Controller;
use App\Models\Nurses;
use App\Models\Gender;
use App\Models\Hospital;
use App\Models\NationalityDoctor;
use Illuminate\Http\Request;

class NurseController extends Controller
{
    public function create(){
        $genders=Gender::with('gender')->get();
        $nationalitys=NationalityDoctor::with('nationality')->get();
        $hospitals=Hospital::with('nurses')->get();
        return view('nurses.create',compact('genders','nationalitys','hospitals'));
    }


    public function show(){
        $nurses =Nurses::all();
        $genders=Gender::with('gender')->get();
        $nationalitys=NationalityDoctor::with('national')->get();
        $hospitals=Hospital::with('nurses')->get();
        return  view('nurses.show',compact('nurses','nationalitys','hospitals','genders'));
    }


    public function save(Request $request){

        $validateData=$request->validate([
            'title'=>'required:nurses',
            'name'=>'required',
            'email' => 'email',
         ]);
           Nurses::create($request->all());
            return redirect('/Nurses/show')->with('status','تمت إضافة الممرض بنجاح  ');
        }

    public function update($id){
        $nurses= Nurses::find($id);
        $genders=Gender::with('gender')->get();
        $nationalitys=NationalityDoctor::with('nationality')->get();
        $hospitals=Hospital::with('nurses')->get();
        return view('nurses.update',compact('nurses','genders','nationalitys','hospitals'));
    }

    public function edit(Request $request,Nurses $id){
        $id->update($request->all());
        return redirect('/Nurses/show')->with('status','تمت تعديل البيانات بنجاح  ');

    }

    public function destroy(Nurses $id){

        $id->delete();
        return redirect('/Nurses/show')->with('error','تم الحذف بنجاح..');

    }

}
