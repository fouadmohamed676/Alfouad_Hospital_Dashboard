<?php

namespace App\Http\Controllers\Local;

use App\Http\Controllers\Controller;
use App\Models\Local;
use Illuminate\Http\Request;

class LocalController extends Controller
{
    public function show(){
        $locals=Local::all();
        return view('local.show',compact('locals'));
    }
    public function create(Request $request){
        return view('local.create');
    }
    public function save(Request $request){
        Local::create($request->all());
    }
    public function update($id){
        $local=Local::find($id);
        return view('local.update',compact('local'));
    }
    public function edit(Request $request,Local $id){
        $id->update($request->all());
        return redirect()->route('local.show')->with('status','تم التعديل بنجاح ');
    }
    public function destroy(Local $id){
        $id->delete();
        return redirect()->route('local.show')->with('error','تم الحذف بنجاح..');
    }

}
