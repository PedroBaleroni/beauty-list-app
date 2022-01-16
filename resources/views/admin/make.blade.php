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
            </div>
            <div class="card">
                <form method="POST" action="{{ route('service.store') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="service_name"
                            class="col-md-4 col-form-label text-md-end">{{ __('Nome do Serviço') }}</label>

                        <div class="col-md-6">
                            <input id="service_name" type="text"
                                class="form-control @error('service_name') is-invalid @enderror" name="service_name"
                                value="{{ old('service_name') }}" required autocomplete="service_name" autofocus>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="service_time"
                            class="col-md-4 col-form-label text-md-end">{{ __('Duração do Serviço') }}</label>

                        <div class="col-md-6">
                            <input id="service_time" type="number"
                                class="form-control @error('service_time') is-invalid @enderror" name="service_time"
                                value="{{ old('service_time') }}" required autocomplete="service_time" autofocus>
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Cadastrar Serviço') }}
                            </button>
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-4"></div>
        </div>
</body>
<style>
    .card {
        background: lightblue;
        color: #000000;
        font-weight: bold;
        height: auto;
        padding-bottom: 5px;
        border-radius: 10px;
        text-align: center;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        padding: 1%;
    }

    .row {
        margin: 5px;
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
