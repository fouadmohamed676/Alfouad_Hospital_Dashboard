<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors_Duty extends Model
{

    public $table="doctor_duty";
    protected $fillable=['id','doctor_id','time_id','created_at'];
    public $timestamps=true;
    protected $hidden=['pivot','created_at','doctor_id','time_id'];

    use HasFactory;


    public function doctors(){
        return $this->belongsTo(Doctor::class,'doctor_id');
    }
     public function duty(){
        return $this->belongsTo(Time::class,'time_id');
    }
}
