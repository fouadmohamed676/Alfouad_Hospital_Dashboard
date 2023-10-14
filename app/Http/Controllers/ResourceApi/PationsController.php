<?php

namespace App\Http\Controllers\ResourceApi;

use App\Http\Controllers\Controller;
use App\Models\Pation;
use Illuminate\Http\Request;

class PationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return 'index';
        // $data=Pation::all();
        // return ['status'=>1,'data'=>json_decode($data)];
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =Pation::create($request->all());
        if($data)
        return ['status'=>'succuess','data'=>json_decode($data)];

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {


        $data=Pation::with('local','doctor','hospital_pation','nationalit')->where('status',1)->get()->paginate(5);
        return ['status'=>1,'data'=>json_decode($data)];


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return ['status'=>'success','data'=>json_decode($id)];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return ['status'=>'success','data'=>json_decode($request)];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
