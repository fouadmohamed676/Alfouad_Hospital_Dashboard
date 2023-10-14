<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pation extends Model
{

    protected $table="pation";
    protected $fillable=['id','name','phone','doctor_id','hospital_id','email','nationality_id','local_id','sick','status','created_at','updated_at'];
    public $timestamps=true;
    protected $hidden=['doctor_id','hospital_id','nationality_id','local_id','sick','status','created_at','updated_at'];
    use HasFactory;

    public function pation(){
        return $this->belongsTo(Forword::class,'pation_id','id');
    }
    public function doctor(){
        return $this->belongsTo(Doctor::class,'doctor_id','id');
    }
    public function hospital_pation(){
        return $this->belongsTo(Hospital::class,'hospital_id','id');
    }
    public function nationalit(){
        return $this->belongsTo(NationalityDoctor::class,'nationality_id','id');
    }
    public function local(){
        return $this->belongsTo(Local::class,'local_id','id');
    }

}
