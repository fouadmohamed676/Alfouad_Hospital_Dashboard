<?php

namespace App\Models;
use App\Models\Gender;
use App\Models\Hospital;
use App\Models\Clinck;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $table="docotrs";
    protected $fillable=['name','title','nationality_id','specialization_id','gender_id','email','phone','clinic_id','barth_date'];
    protected $hidden=['pivot','title','nationality_id','status','hospital_id','local_id','specialization_id','gender_id','email','phone','clinic_id','barth_date'];
    public $timestamps=false;

    ############ RELATIONSHIPS ############
    public function hospital(){
        return $this->belongsToMany(Hospital::class,'hospital_doctors');
    }

    public function times(){
        return $this->belongsToMany(Time::class,'doctor_duty');
    }
    ############ END MANY TO MANY ############
    public function specilization(){
        return $this->belongsTo(SpecializationDoctor::class,'specialization_id','id');
    }

    public function national(){
        return $this->belongsTo(NationalityDoctor::class,'nationality_id');
    }
    public function genders(){
        return $this->belongsTo(Gender::class,'gender_id');
    }

    public function clinck(){
        return $this->belongsTo(Clinck::class,'clinic_id');
    }
    public function locals(){
        return $this->belongsTo(Local::class,'local_id');
    }

    public function forword(){
        return $this->hasOne(Forword::class,'doctor_id');
    }
    public function pation(){
        return $this->belongsTo(Pation::class,'pation_id');
    }

    ############ END RELATIONSHIPS ############
}
