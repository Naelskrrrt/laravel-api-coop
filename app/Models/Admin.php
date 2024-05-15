<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mehradsadeghi\FilterQueryString\FilterQueryString;

class Admin extends Model
{
    use HasFactory, FilterQueryString;
    

    protected $filters = [];
    

    public function reservation(){
        return $this->hasMany(Reservation::class);
    }
}
