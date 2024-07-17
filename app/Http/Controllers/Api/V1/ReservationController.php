<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Reservation;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ReservationCollection;
use App\Http\Resources\V1\ReservationResource;
use Illuminate\Support\Facades\Mail;
use App\Mail\PostMail;
use Exception;

class ReservationController extends Controller
{
    /**
     * Affiche la liste des ressources.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservation = Reservation::filter()->get();
        return new ReservationCollection($reservation);
    }

    /**
     * Affiche le formulaire pour créer une nouvelle ressource.
     */
    public function create()
    {
        //
    }

    /**
     * Stocke une nouvelle ressource dans le stockage.
     */
    public function store(StoreReservationRequest $request)
    {
        try {
            $reservation = Reservation::create($request->all());
            Mail::to('admin@etravel.mg')->send(new PostMail($reservation));

            return response()->json([
                'message' => 'Réservation créée avec succès.',
                'data' => new ReservationResource($reservation)
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Échec de la création de la réservation.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Affiche la ressource spécifiée.
     */
    public function show(Reservation $reservation)
    {
        return new ReservationResource($reservation);
    }

    /**
     * Affiche le formulaire pour modifier la ressource spécifiée.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Met à jour la ressource spécifiée dans le stockage.
     */
    public function update(UpdateReservationRequest $request, Reservation $reservation)
    {
        try {
            $reservation->update($request->all());

            return response()->json([
                'message' => 'Réservation mise à jour avec succès.',
                'data' => new ReservationResource($reservation)
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Échec de la mise à jour de la réservation.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Supprime la ressource spécifiée du stockage.
     */
    public function destroy(Reservation $reservation)
    {
        try {
            $reservation->delete();

            return response()->json([
                'message' => 'Réservation supprimée avec succès.',
                'data' => new ReservationResource($reservation)
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Échec de la suppression de la réservation.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
