@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h2 class="text-center"> Edit Project:{{ $project->title }}</h2>
                <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST"
                    enctype="multipart/form-data">
                    {{-- token --}}
                    @csrf
                    @method('PUT')
                    <label for="title">Title:</label>
                    <input id="title" value="{{ old('title', $project->title) }}" type="text" name="title"
                        class="mb-3 form-control @error('title') is-invalid @enderror" required>
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="type_id">Type:</label>
                    <select id="type_id" name="type_id" class="mb-3 form-control @error('type_id') is-invalid @enderror"
                        required>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}" @if ($project->type->id === $type->id) selected @endif>
                                {{ $type->name }}</option>
                        @endforeach
                    </select>
                    @error('type_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="image">Image:</label>
                    <input id="image" value="{{ old('image', $project->image) }}" type="file" name="image"
                        class="mb-3 form-control @error('image') is-invalid @enderror">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <img src="{{ asset('storage/' . $project->image) }}" id="imagePreview" alt="{{ $project->title }}"><br>
                    <label for="body">Body:</label>
                    <textarea id="body" type="text" name="body" class="mb-3 form-control @error('body') is-invalid @enderror">{{ old('body', $project->body) }}</textarea>
                    @error('body')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="mb-3">
                        <div class="form-group">
                            <h6>Select Technologies:</h6>
                            @foreach ($technologies as $technology)
                                <div class="form-check @error('technologies') is-invalid @enderror">
                                    <input type="checkbox" name="technologies[]"
                                        value="{{ $technology->id }}"{{ $project->technologies->contains($technology->id) ? 'checked' : '' }}>
                                    <label for="">{{ $technology->name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>


                    <button type="submit" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                </form>
            </div>
        </div>

    </div>
@endsection
