<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mehradsadeghi\FilterQueryString\FilterQueryString;

class Customer extends Model
{
    use HasFactory, FilterQueryString;
    
    protected $fillable =[
        'nom_client',
        'adresse_client',
        'email_client',
        'phone_client'
    ];

    protected $filters = [
        'sort',
        'between'
    ];

    public function reservation(){
        return $this->hasMany(Reservation::class);
    }
}
