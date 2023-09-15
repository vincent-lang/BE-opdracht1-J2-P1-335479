<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>instructeur</h1>
    <div>
        @if(session()->has('succes'))
        <div>
            {{session('succes')}}
        </div>
        @endif
    </div>
    <div>
        @foreach($instructeurs as $instructeur)
        <h1>{{$instructeur->Id}}</h1>
        @endforeach
    </div>
</body>

</html>