<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('public/site/bootstrap.css') }}">
</head>

<body>
    <div class="grid" style="padding: 5%;">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4" style="text-align: center">
                <a href="{{ route('schedule.set') }}">
                    <div class="card yellow">
                        <p class="bold" style="margin:auto">
                            Liberar Horários
                        </p>
                    </div>
                </a>
                <a href="{{ route('service.show') }}">
                    <div class="card yellow">
                        <p class="bold" style="margin:auto">
                            Criar Serviço
                        </p>
                    </div>
                </a>
                @foreach ($schedule as $item)
                    <div class="card white">
                        <p class="bold" style="margin:auto">
                            {{ $item->client->name }} - {{ $item->service->service_name }} - {{ $item->service_schedule }}
                        </p>
                    </div>
                @endforeach
            </div>
            <div class="col-4"></div>
        </div>
</body>
<style>
    .card {
        margin: 5px;
        color: #000000;
        font-weight: bold;
        height: 50px;
        border-radius: 10px;
        text-align: center;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        padding: 1%;
    }

    .yellow {
        background: yellow;

    }

    .white {
        background: whitesmoke;
    }

    * {
        margin: 0;
    }

    body,
    html {
        height: 100%;
        width: 100%;
        padding: 0% !important;
        margin: 0% !important;
    }

    html {
        padding: 0% !important;
    }

    body {
        background-image: linear-gradient(135deg, #5800FF, #7b00b8, #7b00b8);
    }

    #wrapper {
        height: 100%;
        display: -webkit-flex;
        display: flex;
        -webkit-flex-direction: column;
        flex-direction: column;
        padding: 0% !important;
    }

</style>

</html>
