<?php

namespace App\Models;
use App\Models\Doctor;
use App\Models\Local;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;
    protected $table="hospital";
    protected $fillable=['id','dis','address','specialization_id','local_id','phone','status','created_at','updated_at'];
    public $timestamps=false;
    protected $hidden=['pivot','specialization_id'];


    public function hospital(){
        return $this-> belongsToMany(Doctor::class,'hospital_doctors');
    }
    public function local(){
        return $this-> hasMany(Local::class,'hospital_id','id');
    }
    public function nurses(){
        return $this->hasOne(Nurses::class,'hospital_id','id');
    }
    public function hospitals(){
        return $this->belongsTo(SpecializationHospital::class,'specialization_id','id');
    }
    public function localHospital(){
        return $this->belongsTo(Local::class,'local_id');
    }
    public function patoins(){
        return $this->hasOne(Pation::class,'hospital_id','id');
    }

}
