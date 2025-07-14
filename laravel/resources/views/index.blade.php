<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAINS</title>
</head>
<body>
    <h1>LISTA TRENI</h1>

    @foreach($trains as $train)

        <p>
            <h3>treno numero:</h3>
            <span> {{ $train->codice_treno }}</span>
            
        </p>

    @endforeach
</body>
</html>