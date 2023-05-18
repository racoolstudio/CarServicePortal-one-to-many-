<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 

class Car extends Model
{
    use HasFactory;

    public $table = "cars";
    protected $fillable = [
        'car_name',
        'car_model'
    ];

    public function owner(){

        return $this->belongsTo('App\Models\Owner');
    }
}
