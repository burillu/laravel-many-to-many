@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Technologies:</h1>
        <div class="container">
            <table class="table table-hover mb-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Actions</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($technologies as $technology)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $technology->name }}</td>

                            <td>
                                <div class="d-flex gap-2">

                                    <button class="btn btn-primary"> <a
                                            href="{{ route('admin.technologies.show', $technology->slug) }}">
                                            <i class="fa-sharp fa-regular fa-eye text-white"></i></a></button>
                                    <button class="btn btn-warning"> <a
                                            href="{{ route('admin.technologies.edit', $technology->slug) }}">
                                            <i class="fa-regular fa-pen-to-square text-white"></i></a></button>
                                    <form action="{{ route('admin.technologies.destroy', $technology->slug) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger cancel-button"
                                            data-item-title="{{ $technology->name }}">
                                            <i class="fa-regular fa-trash-can text-white"></i>
                                        </button>

                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>
            <button class="btn btn-outline-dark"><a href="{{ route('admin.technologies.create') }}"><i
                        class="fa-sharp fa-solid fa-plus"></i>Add new technology</a></button>
        </div>
    </section>
    @include('partials.modal_delete')
@endsection
