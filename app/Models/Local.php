<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;
    protected $table="local";
    protected $fillable=['id','name','phone','local_id'];
    public $timestamps=false;

    public function locals(){
       return $this->hasMany(Doctor::class,'local_id');
    }
    public function clinck(){
        return $this->hasOne(Clinck::class,'local_id');
    }
    public function hospital(){
        return $this->hasOne(Hospital::class,'local_id');
        }
    public function local(){
        $this->belongsTo(Hospital::class,'local_id');
    }
    public function pation(){
        $this->hasOne(Pation::class,'local_id','id');
    }
}
