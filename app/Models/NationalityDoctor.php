<?php

namespace App\Models;
use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NationalityDoctor extends Model
{
    use HasFactory;

    protected $table="nationality";
    protected $fillable=['id','name'];
    public $timestamps=false;

    public function nationality(){
        return $this-> hasMany(Doctor::class,'nationality_id','id');
    }
    public function national(){
        return $this-> hasMany(Nurses::class,'nationality_id','id');
    }

    public function nationalit(){
        return $this-> hasOne(Pation::class,'nationality_id','id');
    }


}
