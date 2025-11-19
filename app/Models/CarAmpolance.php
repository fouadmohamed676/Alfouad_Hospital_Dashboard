<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class  CarAmpolance extends Model
{
    protected $table = 'car_ampolance';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'staff_id',
        'model',
        'number',
        'status'
    ];

    public function car()
    {
        return $this->belongsTo(Staff::class, 'staff_id', 'id');
    }
}
