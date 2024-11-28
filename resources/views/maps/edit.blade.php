@extends('layouts.app')

@section('content')
    <div class="container">


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title m-b-0">Edit College Information</h5>
                    </div>
                    <div class="card-body ">

                        <form action="{{ route('maps.update', ['map' => $map->id]) }}" method="POST" >
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">College Name:</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $map->name }}">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address:</label>
                                <input type="text" class="form-control" id="address" name="address" value="{{ $map->address }}">
                                @error('address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="latitude" class="form-label">Latitude</label>
                                <input type="text" class="form-control" id="latitude" name="latitude" value="{{ $map->latitude }}"
                                @error('latitude')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="longtitude" class="form-label">Longtitude</label>
                                <input type="text" class="form-control" id="longtitude" name="longtitude" value="{{ $map->longtitude }}"
                                @error('longtitude')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="website" class="form-label">Website:</label>
                                <input type="text" class="form-control" id="website" name="website" value="{{ $map->website }}"
                                @error('website')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="contact_number" class="form-label">Contact Number:</label>
                                <input type="text" class="form-control" id="contact_number" name="contact_number" value="{{ $map->contact_number }}"
                                @error('contact_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Submit</button>
                        <a href="{{ route('maps.index') }}" type="submit" class="btn btn-danger mt-2">Back</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
