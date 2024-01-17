@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h2 class="text-center"> Edit Technology:{{ $technology->name }}</h2>
                <form action="{{ route('admin.technologies.update', $technology->slug) }}" method="POST">
                    {{-- token --}}
                    @csrf
                    @method('PUT')
                    <label for="name">Name:</label>
                    <input id="name" value="{{ old('name', $technology->name) }}" type="text" name="name"
                        class="mb-3 form-control @error('name') is-invalid @enderror" required>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror


                    <button type="submit" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                </form>
            </div>
        </div>

    </div>
@endsection
