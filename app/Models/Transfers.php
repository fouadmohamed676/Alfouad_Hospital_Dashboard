<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfers extends Model
{
    protected $table="forwords";
    protected $fillable=['id','file_number','Patients_id','doctor_id','Splize_hos_from','Splize_hos_to','created_at'];
    public $timestamps=true;

    use HasFactory;

    ############## Day Relation with doctor ############
    public function doctor(){
        return $this->belongsTo(Doctor::class,'doctor_id');
    }
    ############## Day Relation with splize ############
    public function patient(){
        return $this->belongsTo(Patients::class,'pation_id');
    }
    ############## Day Relation with splize ############
    public function transfer_to(){
        return $this->belongsTo(SpecializationHospital::class,'Splize_hos_to');
    }
    ############## Day Relation with splize ############
    public function transfer_from(){
        return $this->belongsTo(SpecializationHospital::class,'Splize_hos_from');
    }
}
