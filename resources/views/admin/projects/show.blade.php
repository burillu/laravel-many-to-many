@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Project:{{ $project->title }}</h1>
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 col-md-6">
                    <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
                    <div class="text-secondary">
                        <h4>Type :{{ $project->type?->name }}</h4>
                    </div>
                    <div>
                        @foreach ($project->technologies as $technology)
                            <a href="{{ route('admin.technologies.show', $technology->slug) }}">
                                <span
                                    class="badge rounded-pill my-badge-{{ $technology->slug }}">{{ $technology->name }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <pre class="mb-5">
                        {{ $project->body }}
                    </pre>

                    <div class="d-flex gap-2">
                        <button class="btn btn-primary"> <a href="{{ route('admin.projects.index') }}">
                                <i class="fa-solid fa-arrow-left"></i></a></button>
                        <button class="btn btn-warning"> <a href="{{ route('admin.projects.edit', $project->slug) }}">
                                <i class="fa-regular fa-pen-to-square text-white"></i></a></button>

                        <form action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger cancel-button"
                                data-item-title="{{ $project->title }}">
                                <i class="fa-regular fa-trash-can text-white"></i>
                            </button>

                        </form>
                    </div>
                    <button class="btn btn-outline-dark"><a href="{{ route('admin.projects.create') }}"><i
                                class="fa-sharp fa-solid fa-plus"></i>Add new Project</a></button>
                </div>
            </div>


        </div>
    </section>
    @include('partials.modal_delete')
@endsection
