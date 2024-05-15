<?php

namespace App\Filters;

use Illuminate\Http\Request;

class ApiFilter {
    protected $safeParams = [];

    protected $columnMap = [];

    protected $operatorMap =[];

    public function transform(Request $request) {
        $eloQuest = [];

        // dd($request->all());
        
        foreach ($this->safeParams as $param => $operators){
            $query = $request->query($param);
            // echo $query;
            // print "this is the request".$request->query($param);
            var_dump($query);
            if (!isset($query)){
                continue;
            }
            var_dump($query);

            $column = $this->columnMap[$param] ?? $param;
            
            foreach ($operators as $operator){
                
                if(isset($query[$operator])){
                    $eloQuest[]=[$column, $this->operatorMap[$operator], $query[$operator]];
                }
            }

        }
        
        
        // print count($eloQuest);
        var_dump($eloQuest);

        return $eloQuest;
    }

}