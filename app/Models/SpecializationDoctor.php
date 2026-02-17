<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Doctor;

class SpecializationDoctor extends Model
{
    use HasFactory;

    protected $table="specialization";
    protected $fillable=['id','name'];
    public $timestamps=false;

    public function specialization(){
        return $this-> hasMany(Doctor::class,'specialization_id','id');
    }



}
