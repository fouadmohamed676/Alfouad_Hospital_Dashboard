<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table="staff";

    protected $fillable=['id','name','title','email','phone','status'];
    public $timestamps=true;
    protected $hidden=['pivot','created_at','updated_at','is_deleted'];

    public function pharam(){
        return $this-> belongsTo(Pharamcy::class,'pharamcy_id','id');
    }
    public function pharamcy(){
        return $this-> belongsTo(Pharamcy::class,'pharamcy_id','id');
    }
    public function pharmacy_name(){
        return $this->belongsTo(Pharamcy::class,'pharamcy_id','id');
    }
    public function pharm_(){
        return $this->hasMany(Staff_Pharmacy::class,'staff_id','id');
    }
    public function pharamcyes(){
        return $this->belongsToMany(Pharamcy::class,'staff_pharmacy','staff_id','pharmacy_id','id','id');
        
    }
}
