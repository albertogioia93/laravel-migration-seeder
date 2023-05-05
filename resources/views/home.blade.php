<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Migration Seeder</title>
</head>
<body>
    @include('partials.header')
    <main>
        <ul>
            @foreach ($trains as $item)
            <li>Azienda:{{$item->azienda}}</li>
            <li>Stazione di partenza:{{$item->stazione_di_partenza}}</li>
            <li>Stazione di arrivo:{{$item->stazione_di_arrivo}}</li>
            <li>Orario di partenza:{{$item->orario_di_partenza}}</li>
            <li>Orario di arrivo:{{$item->orario_di_arrivo}}</li>
            <li>Codice treno:{{$item->codice_treno}}</li>
            <li>Numero carrozze:{{$item->numero_carrozze}}</li>
            <li>In orario:{{$item->in_orario}}</li>
            <li>Cancellato:{{$item->cancellato}}</li>
                
            @endforeach
        </ul>
    </main>
    @include('partials.footer')
</body>
@vite('resources/js/app.js')
</html>