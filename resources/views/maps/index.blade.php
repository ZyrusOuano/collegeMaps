@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <h1 class="text-center">List of colleges</h1>
        </div>
        <div class="row d-flex justify-content-between">
            <div class="col-12 mb-3 d-flex justify-content-start">
                <a href="{{ route('maps.create') }}" class="btn btn-outline-primary fs-5" type="submit"><i class="bi bi-plus-lg"></i> Add New College</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 p-5 shadow-lg rounded-4" style="background-color: #FFFFFF;">

                <table class="table table-hover text-center overflow-scroll">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">ID</th>
                            <th class="text-center" scope="col">Name</th>
                            <th class="text-center" scope="col">Address</th>
                            <th class="text-center" scope="col">Latitude</th>
                            <th class="text-center" scope="col">Longtitude</th>
                            <th class="text-center" scope="col">Website</th>
                            <th class="text-center" scope="col">Contact number</th>
                            <th class="text-center" scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($map as $maps)
                            <tr>
                                <th scope="row">{{ $maps['id'] }}</th>
                                <td>{{ $maps['name'] }}</td>
                                <td>{{ $maps['address'] }}</td>
                                <td>{{ $maps['latitude'] }}</td>
                                <td>{{ $maps['longtitude'] }}</td>
                                <td>{{ $maps['website'] }}</td>
                                <td>{{ $maps['contact_number'] }}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('maps.show', ['map' => $maps['id']]) }}" class="btn btn-outline-primary me-2"><i class="bi bi-eye-fill"></i> View</a>
                                        <a href="{{ route('maps.edit', ['map' => $maps['id']]) }}" class="btn btn-outline-success me-2"><i class="bi bi-pencil-fill"></i> Edit</a>

                                        <!-- Delete Form -->
                                        <form action="{{ route('maps.destroy', ['map' => $maps['id']]) }}" method="POST" class="delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-outline-danger delete-button" data-url="{{ route('maps.destroy', ['map' => $maps['id']]) }}">
                                                <i class="bi bi-trash-fill"></i> Delete
                                            </button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteButtons = document.querySelectorAll('.delete-button');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function () {
                const form = button.closest('.delete-form');
                const url = button.getAttribute('data-url');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "This action cannot be undone!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.setAttribute('action', url); // Set the form action to the URL
                        form.submit(); // Submit the form
                    }
                });
            });
        });
    });
</script>
@endpush
