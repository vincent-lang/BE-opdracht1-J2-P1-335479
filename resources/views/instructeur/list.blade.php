<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>

<body>
    <h3>Door instructeur gebruikte voertuigen</h3>
    <h3>Naam: {{$instructeurs->Voornaam}} {{$instructeurs->Tussenvoegsel}} {{$instructeurs->Achternaam}}</h3>
    <h3>Datum in dienst: {{$instructeurs->DatumInDienst}}</h3>
    <h3>Aantal sterren: {{$instructeurs->AantalSterren}}</h3>
</body>

</html>