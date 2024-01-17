@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h2 class="text-center"> Add new Type:</h2>
                <form action="{{ route('admin.types.store') }}" method="POST">
                    {{-- token --}}
                    @csrf
                    <label for="name">Name:</label>
                    <input id="name" value="{{ old('name') }}" type="text" name="name"
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
