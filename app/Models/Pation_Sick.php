<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pation_Sick extends Model
{

    protected $table="pation_sicks";

    protected $fillable=['id','pation_id','sick_id'];	 	
    public $timestamps=false;
    
    protected $hidden=['pation_id','sick_id'];
    use HasFactory;

    public function pation(){
        return $this->belongsTo(Pation::class,'pation_id');
    }
    public function sick(){
        return $this->belongsToMany(Sick::class,'sick_id');
    }
}
