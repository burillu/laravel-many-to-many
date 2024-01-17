@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Types:</h1>
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
                    @foreach ($types as $type)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $type->name }}</td>

                            <td>
                                <div class="d-flex gap-2">

                                    <button class="btn btn-primary"> <a href="{{ route('admin.types.show', $type->slug) }}">
                                            <i class="fa-sharp fa-regular fa-eye text-white"></i></a></button>
                                    <button class="btn btn-warning"> <a href="{{ route('admin.types.edit', $type->slug) }}">
                                            <i class="fa-regular fa-pen-to-square text-white"></i></a></button>
                                    <form action="{{ route('admin.types.destroy', $type->slug) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger cancel-button"
                                            data-item-title="{{ $type->name }}">
                                            <i class="fa-regular fa-trash-can text-white"></i>
                                        </button>

                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>
            <button class="btn btn-outline-dark"><a href="{{ route('admin.types.create') }}"><i
                        class="fa-sharp fa-solid fa-plus"></i>Add new Type</a></button>
        </div>
    </section>
    @include('partials.modal_delete')
@endsection
