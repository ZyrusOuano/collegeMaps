@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-lg">
                    <div class="card-body">
                        {{-- @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }} --}}

                        <div class="row">
                            <div class="col-12 text-center">
                                <i class="bi bi-map fs-1"></i>
                                <p class="fs-3 fw-bold">WELCOME TO SUC MAP</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 px-5">
                                Explore the vibrant world of State Universities and Colleges (SUCs) in the National Capital
                                Region. Whether you're planning your next academic adventure or just curious about what each
                                campus has to offer, our interactive map makes it easy and fun to discover. Dive in and see
                                what’s waiting for you across the NCR!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container shadow-lg" style="background-color: #FFFFFF;">
            <div class="row mt-5 justify-content-center">
                <x-maps-leaflet :centerPoint="['lat' => 14.6091, 'long' => 121.0223]"></x-maps-leaflet>
            </div>
        </div>

    </div>
@endsection
