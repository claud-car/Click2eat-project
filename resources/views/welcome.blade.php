<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <x-app-layout>
            <x-slot name="header">
                <div class="flex justify-center items-center py-40">
                    <h1 class="text-white">JUMBO</h1>
                </div>
            </x-slot>
            <x-slot name="slot">
            </x-slot>
        </x-app-layout>
    </body>
</html>
