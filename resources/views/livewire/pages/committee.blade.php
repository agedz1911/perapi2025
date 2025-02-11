<div>
    <section class="banner page-banner position-relative pb-0">
        <div class="overlay">
        </div>
        <div class="container">
            <div class="page-title text-center position-relative py-11">
                <h2 class="text-white text-uppercase">Organizing Committee</h2>
            </div>
        </div>
    </section>

    <section class="speakers">
        <div class="container">
            <div class="speaker-inner">
                <div class="sepaker-list">
                    <div class="row justify-content-center text-center">
                        @foreach ($uniqueCategories as $category)
                        <h4 class="mb-1 mt-3"><span class="badge bg-kuning px-6 py-3 rounded">{{$category}}</span></h4>
                        @foreach ($committees as $committee)
                        @if ($committee->category == $category)
                        <div class="col-lg-3 col-md-4 col-12 p-2 ">
                            <div class="speaker-box  position-relative overflow-hidden text-white">
                                <img class="speaker-image rounded img-fluid"
                                    src="{{$committee->image ? asset('storage/' . $committee->image) : "
                                    assets/images/speakers.jpg"}}" alt="{{$committee->name}}">
                                <div class="card shadow-sm border-top-0 mt-1">
                                    <h6><a class="text-blue" href="javascript:void(0)">{{$committee->name}}</a>
                                    </h6>
                                    <span class="speaker-post d-block pb-2">{{$committee->title}}</span>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>