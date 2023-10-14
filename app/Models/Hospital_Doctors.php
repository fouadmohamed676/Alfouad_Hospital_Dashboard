<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital_Doctors extends Model
{
    public $table="hospital_doctors";
    protected $fillable=['id','doctor_id','hospital_id','created_at'];
    public $timestamps=true;
    protected $hidden=['pivot','created_at','doctor_id','hospital_id'];
    use HasFactory;
        public function doctors(){
            return $this->belongsTo(Doctor::class,'doctor_id');
        }
         public function hospitals(){
            return $this->belongsTo(Hospital::class,'hospital_id');
        }
}
