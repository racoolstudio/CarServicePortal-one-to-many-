<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 

class Owner extends Model
{
    use HasFactory;

    public $table = "owners";
    protected $fillable = [
        'first_name',
        'last_name',
        'owner_id'
    ];


    public function car(){

        return $this->hasOne('App\Models\Car');
    }

};