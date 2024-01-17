@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>type:{{ $type->name }}</h1>
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 col-md-6">
                    {{-- <img src="{{ asset('storage/' . $type->image) }}" alt="{{ $type->name }}"> --}}
                </div>
                <div class="col-12 col-md-6">
                    <ul>
                        @foreach ($type->projects as $project)
                            <li><a href="{{ route('admin.projects.show', $project->slug) }}">{{ $project->title }}</a></li>
                        @endforeach
                    </ul>
                    <button class="btn btn-warning"> <a href="{{ route('admin.types.edit', $type->slug) }}"> <i
                                class="fa-regular fa-pen-to-square text-white"></i></a></button>
                    <form action="{{ route('admin.types.destroy', $type->slug) }}" method="Post" class="d-flex">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i
                                class="fa-regular fa-trash-can text-white"></i></a></button>
                    </form>
                    <button class="btn btn-outline-dark"><a href="{{ route('admin.types.create') }}"><i
                                class="fa-sharp fa-solid fa-plus"></i>Add new type</a></button>
                </div>
            </div>


        </div>
    </section>
@endsection
