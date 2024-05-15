<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mehradsadeghi\FilterQueryString\FilterQueryString; 

class Voiture extends Model
{
    use HasFactory, FilterQueryString;
    

    protected $filters = [
        'sort'
    ];

    public function reservation(){
        return $this->hasMany(Reservation::class);
    }
}
