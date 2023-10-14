<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use HasFactory;

    protected $table="time_work";
    protected $fillable=['id','name'];
    protected $hidden=['pivot'];
    public $timestamps=false;

    ############## Day Relation with Duty #############
    public function day(){
        return $this->hasOne(Duty::class,'day_id');
    }
    public function doctors(){
        return $this->belongsToMany(Doctor::class,'doctor_duty');
    }
}
