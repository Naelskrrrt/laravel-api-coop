<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class ReservationsFilter extends ApiFilter{

    // $table->integer("id_client");
    //         $table->integer("id_voiture");
    //         $table->integer("id_admin");
    //         $table->string("ville_destination");
    //         $table->dateTime("date_depart");
    //         $table->dateTime("date_reservation");
    //         $table->integer("nb_pers");
    protected $safeParams = [
        'idAdmin' => ['eq', 'ne'],
        'idClient' => ['eq', 'ne'],
        'idVoiture' => ['eq', 'ne'],
        'villeDestination' => ['eq', 'ne'],
        'dateDepart' => ['eq', 'ne', 'lt', 'lte', 'gt', 'gte'],
        'dateReservation' => ['eq', 'ne', 'lt', 'lte', 'gt', 'gte'],
        'nbPers' => ['eq', 'ne', 'lt', 'lte', 'gt', 'gte'],
    

    ];

    protected $columnMap = [
        'idAdmin' => 'id_admin',
        'idClient' => 'id_client',
        'idVoiture' => 'id_voiture',
        'villeDestination' => 'ville_destination',
        'dateDepart' => 'date_depart',
        'dateReservation' => 'date_reservation',
        'nbPers' => 'nb_pers',


    ];

    protected $operatorMap =[
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '!=',
    ];


}