<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duty extends Model
{
    protected $table="duty";

    protected $fillable=['name','doctor_id','day_id','created_at'];
    public $timestamps=true;
    use HasFactory;
    public function day(){
        return $this->belongsTo(Time::class,'day_id');
    }
    ####################

    ############## Day Relation with doctor ############
    public function doctor(){
        $data=Doctor::where('status','1')->get();
        return $this->belongsTo(Doctor::class,'doctor_id');
    }
    public function doctors(){
        return $this->belongsToMany(Doctor::class,'doctor_duty');
    }
    ############## Day Relation with splize ############

    ############## Day Relation with Duty #############

    ############## Day Relation with Duty #############

}
