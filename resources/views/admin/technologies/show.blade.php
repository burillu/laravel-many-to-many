@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Technology:{{ $technology->name }}</h1>
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 col-md-6">
                    {{-- <img src="{{ asset('storage/' . $technology->image) }}" alt="{{ $technology->name }}"> --}}
                </div>
                <div class="col-12 col-md-6">
                    <ul>
                        @foreach ($technology->projects as $project)
                            <li><a href="{{ route('admin.projects.show', $project->slug) }}">{{ $project->title }}</a></li>
                        @endforeach
                    </ul>
                    <button class="btn btn-warning">
                        <a href="{{ route('admin.technologies.edit', $technology->slug) }}">
                            <i class="fa-regular fa-pen-to-square text-white"></i>
                        </a></button>
                    <form action="{{ route('admin.technologies.destroy', $technology->slug) }}" method="Post"
                        class="d-flex">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger cancel-button"
                            data-item-title="{{ $technology->name }}"><i
                                class="fa-regular fa-trash-can text-white"></i></a></button>
                    </form>
                    <button class="btn btn-outline-dark"><a href="{{ route('admin.technologies.create') }}"><i
                                class="fa-sharp fa-solid fa-plus"></i>Add new technology</a></button>
                </div>
            </div>


        </div>
    </section>
    @include('partials.modal_delete')
@endsection
