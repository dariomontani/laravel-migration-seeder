@extends('layouts.base')

@section('content')
    {{-- @dd('trains') --}}
    <div class="container">
        <div class="top">
            <p>company</p>
            <p>departure_station</p>
            <p>arrival_station</p>
            <p>departure_time</p>
            <p>arrival_time</p>
            <p>train_code</p>
            <p>number_of_carriage</p>
            <p>on_time</p>
            <p>cancelled</p>
        </div>
        @foreach ($trains as $train)
        <div class="card">
            <p>{{$train->company}}</p>
            <p>{{$train->departure_station}}</p>
            <p>{{$train->arrival_station}}</p>
            <p>{{$train->departure_time}}</p>
            <p>{{$train->arrival_time}}</p>
            <p>{{$train->train_code}}</p>
            <p>{{$train->number_of_carriage}}</p>
            <p>{{$train->on_time}}</p>
            <p>{{$train->cancelled}}</p>
        </div>
        @endforeach
    </div>
@endsection