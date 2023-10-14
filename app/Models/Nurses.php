<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gender;
use App\Models\NationalityDoctor;

class Nurses extends Model
{
    use HasFactory;
    protected $table="nurses";
    protected $fillable=['id','name','email','phone','nationality_id','gender_id','title','hospital_id','status'];
    public $timestamps=false;
    public function national(){
        return $this->belongsTo(NationalityDoctor::class,'nationality_id','id');
    }
    public function genders(){
        return $this->belongsTo(Gender::class,'gender_id','id');
    }
    public function hospitals(){
        return $this->belongsTo(Hospital::class,'hospital_id','id');
    }

}
