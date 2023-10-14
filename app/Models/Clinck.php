<?php

namespace App\Models;
use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinck extends Model
{
    use HasFactory;
    protected $table="clinics";
    protected $fillable=['id','name','phone','local_id'];
    public $timestamps=false;
    public function clinck(){
        return $this->belongsTo(Doctor::class,'clinic_id');
    }
    public function local(){
      return  $this->belongsTo(Local::class,'local_id');
    }
}
