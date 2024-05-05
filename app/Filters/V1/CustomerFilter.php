<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class CustomerFilter extends ApiFilter{
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

    public function transform(Request $request) {
        $eloQuest = [];

        foreach ($this->safeParams as $param => $operators){
            $query = $request->query($param);

            if (!isset($query)){
                continue;
            }

            $column = $this->columnMap[$param] ?? $param;

            foreach ($operators as $operator){
                if(isset($query[$operator])){
                    $eloQuest[]=[$column, $this->operatorMap[$operator], $query[$operator]];
                }
            }

        }

        return $eloQuest;
    }

}