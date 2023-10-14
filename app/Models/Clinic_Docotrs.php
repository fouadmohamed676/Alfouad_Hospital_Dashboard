<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic_Docotrs extends Model
{
     protected $table="Clinic_Docotrs";	 	
     protected $fillable=['id','doctor_id','clinic_id'];
     public $timestamps=true;
     protected $hidden=['pivot','doctor_id','clinic_id'];
 
    use HasFactory;

    public function doctors(){
        return $this->belongsTo(Doctor::class,'doctor_id');
    }
     public function clinic(){
        return $this->belongsTo(Clinck::class,'clinic_id');
    }
}
