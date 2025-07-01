<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>tabellone treni</title>
</head>
<body class="container text-center" style="font-family: 'Share Tech Mono', monospace;">
    <h1 class="my-5">tabellone prossimi treni in partenza</h1>
    <div class="border border-1 rounded-3 p-3">
        <table class="table m-0">
            <tr class="table-primary">
                <th>azienda</th>
                <th>stazione di partenza</th>
                <th>stazione di arrivo</th>
                <th>orario di partenza</th>
                <th>orario di arrivo</th>
                <th>codice treno</th>
                <th>numero carrozze</th>
                <th>stato</th>
            </tr>

                @foreach ($trains as $train)
                <tr>
                    <td>{{$train['azienda']}}</td>
                    <td>{{$train['stazione di partenza']}}</td>
                    <td>{{$train['stazione di arrivo']}}</td>
                    <td>{{$train['partenza']}}</td>
                    <td>{{$train['arrivo']}}</td>
                    <td>{{$train['codice treno']}}</td>
                    <td>{{$train['numero carrozze']}}</td>
                    <td>
                        @if ($train['cancellato'] == true)
                        <span class="text-danger fw-bolder">cancellato</span>
                        @elseif ($train['in orario'] == true)
                        <span class="text-success">in orario</span>
                        @else
                        <span class="text-danger">in ritardo</span>
                        @endif
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
</body>
</html>
