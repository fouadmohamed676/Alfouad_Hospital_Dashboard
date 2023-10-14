<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff_Pharmacy extends Model
{
    protected $table="staff_pharmacy";
    protected $fillable=['staff_id','pharmacy_id'];
    protected $hidden=['staff_id','pharmacy_id','created_at','updated_at'];
    public $timestamps=false;	
    	 	
    public function staff(){
        return $this->belongsTo(Staff::class,'staff_id');
    }
    public function pharmacy(){

        return $this->belongsTo(Pharamcy::class,'pharmacy_id');
    }

}
