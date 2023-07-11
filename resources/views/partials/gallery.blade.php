@foreach ($projects as $project)
    <div class="col-12 col-md-6 col-lg-3 g-5">
        <div class="card h-100">
            <div class="card-header p-0 d-flex justify-content-center">
                <img class="w-100 rounded-t m-0 object-cover"
                    src="{{ $project->image ?? Vite::asset('resources/images/image-not-available.jpg') }}"
                    alt="{{ $project->name }}">

            </div>

            <div class="card-body text-center">
                <a target="_blank" href="{{ $project->link }}">
                    <h5>{{ $project->name }}</h5>
                </a>
            </div>
            <div class="card-footer text-center">
                <div class="pb-2">
                    <small>{{ strtolower($project->stack) }}</small>
                </div>
                <div class="d-flex flex-column gap-2">
                    <a href="{{ route('admin.projects.show', $project) }}"><button
                            class="btn bg-primary-subtle w-100"><i class="fa-solid fa-magnifying-glass m-2"></i>Show
                            Details</button></a>
                    <a target="_blank" href="{{ $project->link }}"><button class="btn bg-primary-subtle w-100"><i
                                class="fa-solid fa-globe m-2"></i>Visit Website</button></a>
                </div>
            </div>
        </div>
    </div>
@endforeach
