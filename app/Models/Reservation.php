<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mehradsadeghi\FilterQueryString\FilterQueryString;

class Reservation extends Model
{
    use HasFactory, FilterQueryString;
    

    protected $filters = [
        'sort'
    ];

    public function admin(){
        return $this->belongsTo(Admin::class);
    }
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function voiture(){
        return $this->belongsTo(Voiture::class);
    }
}
