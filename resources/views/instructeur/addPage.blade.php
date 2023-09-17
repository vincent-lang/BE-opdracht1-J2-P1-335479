<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>

<body>
    <h3>Alle beschikbare voertuigen</h3>
    <h3>Naam: {{$instructeurs->Voornaam}} {{$instructeurs->Tussenvoegsel}} {{$instructeurs->Achternaam}}</h3>
    <h3>Datum in dienst: {{$instructeurs->DatumInDienst}}</h3>
    <h3>Aantal sterren: {{$instructeurs->AantalSterren}}</h3>
    <table>
        <thead>
            <th>Type voertuig</th>
            <th>Type</th>
            <th>Kenteken</th>
            <th>Bouwjaar</th>
            <th>Brandstof</th>
            <th>Rijbewijs categorie</th>
            <th>Toevoegen</th>
            <th>Wijzigen</th>
        </thead>
        <tbody>
            @foreach ($voertuigData as $voertuigRow)
            <tr>
                <td>{{$voertuigRow->TypeVoertuig}}</td>
                <td>{{$voertuigRow->Type}}</td>
                <td>{{$voertuigRow->Kenteken}}</td>
                <td>{{$voertuigRow->Bouwjaar}}</td>
                <td>{{$voertuigRow->Brandstof}}</td>
                <td>{{$voertuigRow->Rijbewijscategorie}}</td>
                <td>
                    <a href="{{route('instructeur.add', [$instructeurs->Id, $voertuigRow->Id])}}">
                        <img src="/img/add.png" alt="add.png">
                    </a>
                </td>
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