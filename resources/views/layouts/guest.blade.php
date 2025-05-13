<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'CineTix') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Tailwind via Vite -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body {
                background: linear-gradient(rgba(1, 18, 40, 0.9), rgba(1, 18, 40, 0.9)),
                url('{{ asset('storage/images/login-bg.jpg') }}') no-repeat center center fixed;
                background-size: cover;
                font-family: 'Segoe UI', sans-serif;
            }

            @keyframes slideIn {
                from {
                    opacity: 0;
                    transform: translateY(50px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes pulseBtn {
                0% {
                    box-shadow: 0 0 0 0 rgba(245, 197, 24, 0.7);
                }
                70% {
                    box-shadow: 0 0 0 15px rgba(245, 197, 24, 0);
                }
                100% {
                    box-shadow: 0 0 0 0 rgba(245, 197, 24, 0);
                }
            }
        </style>
    </head>
    <body class="min-h-screen flex items-center justify-center m-0">
        {{ $slot }}
    </body>
</html>
