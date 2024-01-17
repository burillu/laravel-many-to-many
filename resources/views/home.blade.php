@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Home</h1>
        <button class="btn btn-outline-dark"><a href="{{ route('admin.projects.index') }}"> Go to Projects list</a></button>
    </section>
@endsection
