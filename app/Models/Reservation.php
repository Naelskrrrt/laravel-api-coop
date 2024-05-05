<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

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
