@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 p-5">
                <img class="w-100" src="{{ $project->image ?? Vite::asset('resources/images/image-not-available.jpg') }}"
                    alt="{{ $project->name }}">
                <div class="position-absolute bottom-0 m-3 d-flex gap-2">
                    <a href="{{ route('admin.projects.edit', $project) }}"><button class="btn bg-primary-subtle w-100"><i
                                class="fa-solid fa-gear m-2"></i>Edit
                            Project</button></a>
                    <form name="delete-form" class="w-auto" action="{{ route('admin.projects.destroy', $project) }}"
                        method="post">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('admin.projects.destroy', $project) }}"><button
                                class="btn bg-danger-subtle w-100"><i class="fa-solid fa-gear m-2"></i>Delete
                                Project</button></a>
                    </form>
                </div>
            </div>
            <div class="col-12 col-lg-6 p-5 d-flex flex-column">
                <h2>{{ $project->name }}</h2>
                <hr>
                <p><span class="fw-bold">Stack</span>: {{ $project->stack }}</p>
                <p>{{ $project->description }}</p>
            </div>
        </div>
    </div>
@endsection
