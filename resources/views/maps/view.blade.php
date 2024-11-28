@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row d-flex justify-content-center gap-2">
        <div class="col-3 p-3 d-flex flex-column justify-content-center rounded shadow-lg"
            style="background-color: #fff; height: 100%;">
            <ul class="fs-5 p-0 m-0" style="list-style: none;">
                <li>Name: <span>{{ $map->name }}</span></li>
                <li>Address: <span>{{ $map->address }}</span></li>
                <li>Latitude: <span>{{ $map->latitude }}</span></li>
                <li>Longitude: <span>{{ $map->longtitude }}</span></li>
                <li>Website: <span>{{ $map->website }}</span></li>
                <li>Contact Number: <span>{{ $map->contact_number }}</span></li>
            </ul>
            <a href="{{ route('maps.index') }}" type="submit" class="btn btn-danger mt-2">Back</a>
        </div>
        <div class="col-8 p-3 d-flex flex-column justify-content-center rounded shadow-lg"
            style="background-color: #fff; height: 100%;">
            <p>{{-- set the centerpoint of the map: --}}
                <x-maps-leaflet :centerPoint="['lat' => $map->latitude, 'long' => $map->longtitude]" :markers="[['lat' => $map->latitude, 'long' => $map->longtitude]]" :zoomLevel="20"></x-maps-leaflet>
            </p>
        </div>
    </div>
</div>




@endsection
