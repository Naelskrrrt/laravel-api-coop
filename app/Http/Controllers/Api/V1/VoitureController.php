<?php

namespace App\Http\Controllers\Api\V1;


use App\Models\Voiture;
use App\Http\Requests\StoreVoitureRequest;
use App\Http\Requests\UpdateVoitureRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\VoitureCollection;
use App\Http\Resources\V1\VoitureResource;



class VoitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new VoitureCollection(Voiture::paginate());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVoitureRequest $request)
    {
        return new VoitureResource(Voiture::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Voiture $voiture)
    {
        return new VoitureResource($voiture);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Voiture $voiture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVoitureRequest $request, Voiture $voiture)
    {
        $voiture->update($request->all());
        return new VoitureResource($voiture);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voiture $voiture)
    {
        $voiture->delete();
        return new VoitureResource($voiture);
    }
}
