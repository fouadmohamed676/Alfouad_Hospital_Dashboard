<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharamcy extends Model
{
    use HasFactory;
    protected $table="pharmacy";
    protected $fillable=['id','name','phone','title','address','time_work'];
    public $timestamps=false;
    protected $hidden=['pivot'];
    public function pharma(){
        return $this-> belongsTo(Staff::class,'pharamcy_id','id');
    }
    public function staff(){
        return $this->belongsTo(Staff::class,'staff_id');
    }
    public function staffs(){
        return $this-> belongsToMany(Staff::class,'staff_pharmacy','pharmacy_id','staff_id','id','id');
    }
    
}
