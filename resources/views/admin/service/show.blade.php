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
                <a href="{{ route('service.set') }}">
                    <div class="card">
                        <p class="bold" style="margin:auto">
                            Criar Serviço
                        </p>
                    </div>
                </a>
                @foreach ($services as $service)
                        <div class="card" style="margin:3px;">
                            <p class="bold" style="margin:auto">
                                {{$service->service_name}} ( {{$service->service_time}} min )
                            </p>
                        </div>
                @endforeach
            </div>
            <div class="col-4"></div>
        </div>
</body>
<style>
    .card {
        background: yellow;
        color: #000000;
        font-weight: bold;
        height: 50px;
        border-radius: 10px;
        text-align: center;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        padding: 1%;
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
