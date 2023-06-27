<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body class="bg-dark">
        <h1 class="text-center text-danger p-3">Today's departures and arrivals : </h1>
        <div class="container">
        <table class="table table-striped table-dark border border-warning">
            <thead>
              <tr>
                <th scope="col">Company</th>
                <th scope="col">Departur Station</th>
                <th scope="col">Arrival Station</th>
                <th scope="col">Departure Time</th>
                <th scope="col">Arrival Time</th>
                <th scope="col">Train code</th>
                <th scope="col">Number of Carriages</th>
                <th scope="col">In time</th>
                <th scope="col">Cancelled</th>
                
              </tr>
            </thead>
            <tbody>
                @foreach($trains as $train)
                    <tr>
                    <td>{{ $train->company }}</td>
                    <td>{{ $train->departure_station }}</td>
                    <td>{{ $train->arrival_station }}</td>
                    <td>{{ $train->departure_time }}</td>
                    <td>{{ $train->arrival_time }}</td>
                    <td>{{ $train->train_Code }}</td>
                    <td>{{ $train->number_of_carriages }}</td>
                    <td>{{ $train->in_time }}</td>
                    <td>{{ $train->cancelled }}</td>
                </tr>
            @endforeach
            </tbody>
          </table>
        </div>
    </body>
</html>
