<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sick extends Model
{
    protected $table="sick";

    protected $fillable=['id','name'];	 	
    public $timestamps=false;
    use HasFactory;
    public function pation(){
        return $this->belongsToMany(Pation_Sick::class,'pation_id');
    }
    
}
