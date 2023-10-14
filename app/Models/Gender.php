<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Doctor;

class Gender extends Model
{
    use HasFactory;
    protected $table="gender";

    protected $fillable=['id','name'];
    public $timestamps=false;

    ############ RELATIONSHIP ############
    public function gender(){
        return $this->hasOne(Doctor::class,'gender_id');
    }
}
