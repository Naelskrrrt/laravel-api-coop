<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class CustomersFilter extends ApiFilter{
    protected $safeParams = [
        'nomClient' => ['eq'],
        'adresseClient' => ['eq'],
        'phoneClient' => ['eq'],
        'emailClient' => ['eq'],
    ];

    protected $columnMap = [
        'nomClient' => 'nom_client',
        'adresseClient' => 'adresse_client',
        'phoneClient' => 'phone_client',
        'emailClient' => 'email_client'
    ];

    protected $operatorMap =[
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>='
    ];

}