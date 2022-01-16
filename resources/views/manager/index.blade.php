<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Beauty List</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('site/bootstrap.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body class="antialiased back-body w-auto p-3">
    <div id="wrapper">
        <div
            class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        @if (Route::has('register'))
                            <div class="row">
                                <div class="col-md-11">

                                </div>
                                <div class="col-md-1"><a href="{{ route('register') }}"
                                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Cadastrar-se</a></div>
                            </div>

                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <div class="grid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <p class="bold"style="margin:auto">
                            
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

</body>
<style>
    .card {
        background: #fffffff0;
        color:#000000;
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
    html{
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
