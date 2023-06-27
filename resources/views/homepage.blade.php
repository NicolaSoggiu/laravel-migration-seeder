<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        <h1 class="text-center text-danger p-4">Today's departures and arrivals : </h1>
        <ul>
            @foreach($trains as $train)
            <li>{{ $train->company }}</li>
            <li>{{ $train->departure_station }}</li>
            <li>{{ $train->arrival_station }}</li>
            <li>{{ $train->departure_time }}</li>
            <li>{{ $train->arrival_time }}</li>
            <li>{{ $train->train_Code }}</li>
            <li>{{ $train->number_of_carriages }}</li>
            <li>{{ $train->in_time }}</li>
            <li>{{ $train->cancelled }}</li>
            @endforeach
        </ul>
    </body>
</html>
