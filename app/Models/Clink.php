<?php

namespace App\Models;
use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clink extends Model
{
    use HasFactory;
    protected $table="clinics";
    protected $fillable=['id','name','phone','local_id','created_at','updated_at'];
    public $timestamps=false;
    public function clink(){
        return $this->belongsTo(Doctor::class,'clinic_id');
    }
    public function local(){
      return  $this->belongsTo(Local::class,'local_id');
    }
}
