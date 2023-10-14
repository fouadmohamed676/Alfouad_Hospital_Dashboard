<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forword extends Model
{
    protected $table="forwords";
    protected $fillable=['id','file_number','pation_id','doctor_id','Splize_hos_from','Splize_hos_to','created_at'];
    public $timestamps=true;

    use HasFactory;

    ############## Day Relation with doctor ############
    public function doctor(){
        return $this->belongsTo(Doctor::class,'doctor_id');
    }
    ############## Day Relation with splize ############
    public function pation(){
        return $this->belongsTo(Pation::class,'pation_id');
    }
    ############## Day Relation with splize ############
    public function forword_to(){
        return $this->belongsTo(SpecializationHospital::class,'Splize_hos_to');
    }
    ############## Day Relation with splize ############
    public function forword_from(){
        return $this->belongsTo(SpecializationHospital::class,'Splize_hos_from');
    }
}
