<!-- resources/views/emails/reservation.blade.php -->

<!DOCTYPE html>
<html>
    <head>
        <title>Reservation Details</title>
    </head>
    <body>
        <h2>Vous venez de recevoir une reservation pour un Voyage :</h2>
        <h1>Details du Reservation</h1>
        <p><strong>Id du Client:</strong> {{ $reservation->id_client }}</p>
        <p><strong>Id du Voiture:</strong> {{ $reservation->id_voiture }}</p>
        <p><strong>Date de Départ:</strong> {{ $reservation->date_depart }}</p>
        <p>
            <strong>Ville de Destination:</strong>
            {{ $reservation->ville_destination }}
        </p>
        <p><strong>Nombre de Personne:</strong> {{ $reservation->nb_pers }}</p>
        <p><strong>Id du responsable:</strong> {{ $reservation->id_admin }}</p>

        <!-- Add more fields as necessary -->
        <a href="127.0.0.1:8000/api/v1/reservations">Voir la Reservation</button>
    </body>
</html>
