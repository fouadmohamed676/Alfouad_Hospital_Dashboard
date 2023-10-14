<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecializationHospital extends Model
{
    use HasFactory;
    protected $table="specializationhospital";
    protected $fillable=['id','name','created_at','updated_at'];
    public $timestamps=true;

    public function specialization(){
        return $this->hasOne(Hospital::class,'specialization_id','id');
    }
    public function Splize_hos_to(){
        return $this->hasOne(Forword::class,'Splize_hos_to','id');
    }
    public function Splize_hos_from(){
        return $this->hasOne(Forword::class,'Splize_hos_from','id');
    }

}
