<?php

namespace App\Http\Controllers;
use App\Models\Hospital;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{

    public function show(){
        $data=User::all();
        return ['status'=>1,'data'=>json_decode($data)];

    }

     public function create(){

    }

     public function save(Request $request){
        User::create($request->all());
    }

     public function update($id){
        $data=User::find($id);
    }

    public function edit(Request $request,User $id){
        $id->update($request->all());
        return ['status'=>1,'data'=>'Success'];
    }

     public function destroy($id){
        $data=User::find($id);
        $data->delete();
        return ['status'=>1,'data'=>'Success'];
    }


}
