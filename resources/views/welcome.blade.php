@extends('layouts.main')

@section('main-content')
    <div class="container">
        <h1 class="my-5 text-center">I LIKE TRAINS</h1>

        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">Train</th>
                    <th scope="col">From</th>
                    <th scope="col">To</th>
                    <th scope="col">Departure</th>
                    <th scope="col">Arrival</th>
                    <th scope="col">On Time</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <th scope="row" @if ($train->cancelled) class="text-danger " @endif>
                            {{ $train->getVector() }}</th>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td>{{ $train->departure_time }}</td>
                        <td>{{ $train->arrival_time }}</td>
                        <td>
                            @if ($train->on_time && !$train->cancelled)
                                <span class="text-success">&check;</span>
                            @else
                                <span class="text-danger">&cross;</span>
                            @endif
                        </td>
                        <td>
                            @if ($train->cancelled)
                                {{ 'Cancelled' }}
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
