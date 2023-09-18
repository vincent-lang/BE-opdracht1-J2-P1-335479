<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>

<body>
    <h3>Wijzigen voertuiggegevens</h3>
    @foreach($voertuigData as $row)
    <form class="wijzig" method="post" action="{{route('instructeur.update', [$instructeurs->Id, $row->Id])}}">
        @csrf
        @method('put')
        <div class="wijzig">
            <label for="Instructeur">Instructeur:</label>
            <select name="Instructeur" id="Instructeur">
                <option value="{{$instructeurs->Voornaam}} {{$instructeurs->Tussenvoegsel}} {{$instructeurs->Achternaam}}">{{$instructeurs->Voornaam}} {{$instructeurs->Tussenvoegsel}} {{$instructeurs->Achternaam}}</option>
                <option value="{{$instructeurs->Voornaam}} {{$instructeurs->Tussenvoegsel}} {{$instructeurs->Achternaam}}">Li Zhan</option>
                <option value="{{$instructeurs->Voornaam}} {{$instructeurs->Tussenvoegsel}} {{$instructeurs->Achternaam}}">Leroy Boerhaven</option>
                <option value="{{$instructeurs->Voornaam}} {{$instructeurs->Tussenvoegsel}} {{$instructeurs->Achternaam}}">Yoeri Van Veen</option>
                <option value="{{$instructeurs->Voornaam}} {{$instructeurs->Tussenvoegsel}} {{$instructeurs->Achternaam}}">Bert Van Sali</option>
            </select>
        </div>
        <div class="wijzig">
            <label for="Type_voertuig">Type voertuig:</label>
            <select name="Type_voertuig" id="Type_voertuig">
                <option value="{{$row->TypeVoertuig}}">{{$row->TypeVoertuig}}</option>
                <option value="{{$row->TypeVoertuig}}">Vrachtwagen</option>
                <option value="{{$row->TypeVoertuig}}">Bus</option>
                <option value="{{$row->TypeVoertuig}}">Bromfiets</option>
            </select>
        </div>
        <div class="wijzig">
            <label for="Type">Type:</label>
            <input type="text" name="Type" value="{{$row->Type}}">
        </div>
        <div class="wijzig">
            <label for="Bouwjaar">Bouwjaar:</label>
            <input type="text" name="Bouwjaar" value="{{$row->Bouwjaar}}" readonly>
        </div>
        <div class="wijzig">
            <label for="Diesel">Diesel:</label>
            <input type="checkbox" name="Diesel" value="{{$row->Brandstof}}">
            <label for="Benzine">Benzine:</label>
            <input type="checkbox" name="Benzine" value="{{$row->Brandstof}}">
            <label for="Elektrisch">Elektrisch:</label>
            <input type="checkbox" name="Elektrisch" value="{{$row->Brandstof}}">
        </div>
        <div class="wijzig">
            <label for="Kenteken">Kenteken:</label>
            <input type="text" name="Kenteken" value="{{$row->Kenteken}}">
        </div>
        @endforeach
        <div class="wijzig">
            <input type="submit" value="Wijzig">
        </div>
    </form>
</body>

</html>