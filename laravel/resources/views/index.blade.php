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
            <h3> treno numero: {{ $train->codice_treno }}</h3>
            <p> operato da : {{ $train->azienda }}</p>
            <p> in arrivo da : {{ $train->stazione_di_partenza }}</p>
            <p> diretto a : {{ $train->stazione_di_arrivo }}</p>
            <p> partirà alle : {{ $train->orario_di_partenza }}</p>
            <p> al binario : {{ $train->binario }}</p>
            <p> arriverà alle : {{ $train->orario_di_arrivo }}</p>
            <p> in arrivo da : {{ $train->stazione_di_partenza }}</p>
            <p> è previsto ritardo : 
                
                @if($train->arriva_in_orario)
                    No
                @else
                    Sì
                @endif
                
            </p>
            <p> è prevista cancellazione : 
                
                @if($train->cancellato)
                    Si
                @else
                    No
                @endif
                
            </p>        

    @endforeach
</body>
</html>