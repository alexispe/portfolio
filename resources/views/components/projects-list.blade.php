<div class="row">
    @foreach($projects as $project)
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card card-hover border-0 rounded-4 overflow-hidden h-100 shadow">
                <img src="{{ asset($project->main_image) }}" class="card-img-top" alt="">
                <div class="card-body d-flex flex-column">
                    <span class="fw-semi-bold text-black-50 fs-6">{{ $project->type }}</span>
                    <h4 class="card-title fw-semi-bold mt-1 mb-3">{{ $project->title }}</h4>
                    <p class="lead flex-fill">{{ $project->excerpt }}</p>
                    <a href="{{ route('project.show', $project) }}" class="text-decoration-none lead d-flex align-items-end">
                        <img src="{{ asset('storage/icons/doc.plaintext.svg') }}" alt="" style="">
                        <span class="ps-2" style="line-height: 1.3em">Lire</span>
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
