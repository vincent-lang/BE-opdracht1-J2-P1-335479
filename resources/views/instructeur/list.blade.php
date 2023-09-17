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
    <h3>
        <a href="">Toevoegen voertuig</a>
    </h3>
    <table>
        <thead>
            <th>Type voertuig</th>
            <th>Type</th>
            <th>Kenteken</th>
            <th>Bouwjaar</th>
            <th>Brandstof</th>
            <th>Rijbewijs categorie</th>
            <th>Wijzigen</th>
        </thead>
        <tbody>
            @foreach ($data as $row)
            <tr>
                <td>{{$row->TypeVoertuig}}</td>
                <td>{{$row->Type}}</td>
                <td>{{$row->Kenteken}}</td>
                <td>{{$row->Bouwjaar}}</td>
                <td>{{$row->Brandstof}}</td>
                <td>{{$row->Rijbewijscategorie}}</td>
                <td>
                    <a href="">
                        <img src="/img/wijzig.png" alt="wijzig.png">
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>