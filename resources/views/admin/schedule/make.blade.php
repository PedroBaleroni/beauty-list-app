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
                <form method="POST" action="{{ route('schedule.store') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="service_id" class="col-md-4 col-form-label text-md-end">{{ __('Novo Serviço') }}</label>

                        <div class="col-md-6">
                        </div>
                        <select class="form-select" id="service_id" name="service_id" aria-label="Default select example">
                            @foreach ($services as $item)
                                <option value="{{ $item->id }}">{{ $item->service_name }} ( {{$item->service_time}} min) </option>
                            @endforeach
                        </select>

                    </div>
                    <div class="row mb-3">
                        <label for="client_id" class="col-md-4 col-form-label text-md-end">{{ __('Cliente') }}</label>

                        <div class="col-md-6">
                        </div>
                        <select class="form-select" name="client_id" id="client_id" aria-label="Default select example">
                            <option value= null> SEM CLIENTE</option>
                            @foreach ($clients as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row mb-3">
                        <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>

                        <div class="col-md-6">
                            <select class="form-select" id="status" name="status" aria-label="Default select example">
                                <option value="0">LIVRE</option>
                                <option value="1">RESERVADO</option>
                                <option value="2">OCUPADO</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="service_schedule"
                            class="col-md-4 col-form-label text-md-end">{{ __('Data') }}</label>

                        <div class="col-md-6">
                            <div id="date-picker-example" name="service_schedule" class="md-form md-outline input-with-post-icon datepicker">
                                <input id="service_schedule" type="date" name="service_schedule">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="service_hour"
                            class="col-md-4 col-form-label text-md-end">{{ __('Horário') }}</label>

                        <div class="col-md-6">
                            <div class="md-form mx-5 my-5">
                                <input type="time" id="service_hour" name="service_hour" class="form-control">
                            </div>
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
