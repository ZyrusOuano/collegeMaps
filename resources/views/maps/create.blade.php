@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <h1 class="text-center">NEW COLLEGE ENTRY</h1>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-8 p-5 shadow-lg rounded-4">
                <form action="{{ route('maps.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">College Name:</label>
                        <input type="text" class="form-control" id="name" name="name">
                        @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address:</label>
                        <input type="text" class="form-control" id="address" name="address">
                        @error('address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="latitude" class="form-label">Latitude: </label>
                        <input type="text" class="form-control" id="latitude" name="latitude">
                        @error('latitude')
                                    <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="longtitude" class="form-label">Longtitude: </label>
                        <input type="text" class="form-control" id="longtitude" name="longtitude">
                        @error('longtitude')
                                    <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="website" class="form-label">Website: </label>
                        <input type="text" class="form-control" id="website" name="website">
                        @error('website')
                                    <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="contact_number" class="form-label">Contact Number: </label>
                        <input type="text" class="form-control" id="contact_number" name="contact_number">
                        @error('contact number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="bi bi-floppy-fill"></i> Save</button>
                    <a href="{{ route('maps.index') }}" type="submit" class="btn btn-danger">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
