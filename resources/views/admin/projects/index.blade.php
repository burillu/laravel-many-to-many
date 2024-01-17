@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Projects:</h1>
        <div class="container">
            <table class="table table-hover mb-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Type</th>
                        <th scope="col">Body</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->type?->name }}</td>
                            <td>{{ substr($project->body, 0, 100) . '...' }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-primary"> <a
                                            href="{{ route('admin.projects.show', $project->slug) }}">
                                            <i class="fa-sharp fa-regular fa-eye text-white"></i></a></button>
                                    <button class="btn btn-warning"> <a
                                            href="{{ route('admin.projects.edit', $project->slug) }}">
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
                            </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>
            <button class="btn btn-outline-dark"><a href="{{ route('admin.projects.create') }}"><i
                        class="fa-sharp fa-solid fa-plus"></i>Add new Project</a></button>
        </div>
    </section>
    @include('partials.modal_delete')
@endsection
