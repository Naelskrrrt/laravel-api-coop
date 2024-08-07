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

    public $fillable = [
        'id_client',
        'id_voiture',
        'id_admin',
        'ville_destination',
        'date_depart',
        'date_reservation',
        'nb_pers',
        'nom_client',
        'adresse_client',
        'email_client',
        'phone_client'
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
