<div>
    <section class="banner page-banner position-relative pb-0">
        <div class="overlay">
        </div>
        <div class="container">
            <div class="page-title text-center position-relative py-11">
                <h2 class="text-white text-uppercase">Faculties</h2>
            </div>
        </div>
    </section>

    <section class="speakers">
        <div class="container">
            <div class="px-3 pb-5">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fa-solid fa-search"></i>
                    </span>
                    <input type="text" wire:model.live.debounce.500ms='searchTerm' class="form-control border"
                        placeholder="Search Faculties" aria-label="Search Faculties"
                        aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="speaker-inner">
                <nav>
                    <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="indonesian-tab" data-bs-toggle="tab"
                            data-bs-target="#indonesian" type="button" role="tab" aria-controls="indonesian"
                            aria-selected="true">Indonesian Faculties</button>
                        <button class="nav-link" id="foreign-tab" data-bs-toggle="tab" data-bs-target="#foreign"
                            type="button" role="tab" aria-controls="foreign" aria-selected="false">Foreign
                            Faculties</button>
                    </div>
                </nav>
                <div class="tab-content mt-5" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="indonesian" role="tabpanel"
                        aria-labelledby="indonesian-tab" tabindex="0">

                        <div class="sepaker-list">
                            <div class="row">
                                @foreach ($indofaculties as $indo)
                                <div class="col-lg-3 col-md-6 p-2 text-center text-white">
                                    <div class="speaker-box  position-relative overflow-hidden text-white">
                                        <img class="speaker-image rounded w-100"
                                            src="{{$indo->image ? asset('storage/' . $indo->image) : "
                                            assets/images/speakers.jpg"}}" alt="{{$indo->name}}">
                                        <div class="box-content position-absolute bottom-0 z-1 pt-5">
                                            <h6 class="speaker-title d-block faculty mb-0" data-bs-toggle="modal"
                                                data-bs-target="#{{$loop->index}}">{{$indo->name}}
                                            </h6>
                                            <span class="pb-2 speaker-post d-block">{{$indo->country}}</span>
                                            <small data-bs-toggle="modal" data-bs-target="#{{$loop->index}}"
                                                class="rounded pb-2 ps-0 d-block social-link faculty me-1">Read
                                                More..</small>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="{{$loop->index}}" tabindex="-1" aria-labelledby="ModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title fs-5" id="ModalLabel">Faculty Detail
                                                </h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-0 px-3">
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <img class="rounded-circle shadow img-thumbnail"
                                                                    style="width: 80px"
                                                                    src="{{$indo->image ? asset('storage/' . $indo->image) : "
                                                                    assets/images/speakers.jpg"}}"
                                                                    alt="{{$indo->name}}">
                                                                <div>
                                                                    <p class="black mb-0"><span
                                                                            class="fw-bold">{{$indo->name}}</span> <br>
                                                                        {{$indo->country}}</p>
                                                                    <small>{{$indo->description}}</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-lg-5 mt-3 mb-2">
                                                        <div class="col-lg-12">
                                                            <p class="fw-bold">Session</p>
                                                            @foreach ($indo->schedules as $schedule)
                                                            <div class="d-flex gap-5 text-success fw-bold">
                                                                <p>{{\Carbon\Carbon::parse($schedule->sesi->date)->format('d
                                                                    F Y')}}</p>
                                                                <p>{{$schedule->time_speaker}}</p>
                                                                <p>{{$schedule->sesi->room}}</p>
                                                            </div>
                                                            <p class="fw-bold black mb-1">{{$schedule->sesi->title_ses}}
                                                            </p>
                                                            <p class="black mb-5 border-dashed-bottom-2 pb-3">
                                                                {{$schedule->topic_title}}</p>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn1 "
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="foreign" role="tabpanel" aria-labelledby="foreign-tab" tabindex="0">

                        <div class="sepaker-list">
                            <div class="row">
                                @foreach ($foreignfaculties as $foreign)
                                <div class="col-lg-3 col-md-6 p-2 text-center text-white">
                                    <div class="speaker-box  position-relative overflow-hidden text-white">
                                        <img class="speaker-image rounded w-100"
                                            src="{{$foreign->image ? asset('storage/' . $foreign->image) : "
                                            assets/images/speakers.jpg"}}" alt="{{$foreign->name}}">
                                        <div class="box-content position-absolute bottom-0 z-1 pt-5">
                                            <h6 class="speaker-title d-block faculty mb-0" data-bs-toggle="modal"
                                                data-bs-target="#forein-{{$loop->index}}">{{$foreign->name}}
                                            </h6>
                                            <span class="pb-2 speaker-post d-block">{{$foreign->country}}</span>
                                            <small data-bs-toggle="modal" data-bs-target="#forein-{{$loop->index}}"
                                                class="rounded pb-2 ps-0 d-block social-link faculty me-1">Read
                                                More..</small>

                                        </div>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="forein-{{$loop->index}}" tabindex="-1"
                                    aria-labelledby="ModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title fs-5" id="ModalLabel">Faculty Detail
                                                </h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-0 p-3">
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <img class="rounded-circle shadow img-thumbnail"
                                                                    style="width: 80px"
                                                                    src="{{$foreign->image ? asset('storage/' . $foreign->image) : "
                                                                    assets/images/speakers.jpg"}}"
                                                                    alt="{{$foreign->name}}">
                                                                <div>
                                                                    <p class="black mb-0"><span
                                                                            class="fw-bold">{{$foreign->name}}</span>
                                                                        <br>
                                                                        {{$foreign->country}}
                                                                    </p>
                                                                    <small>{{$foreign->description}}</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-lg-5 mt-3 mb-2">
                                                        <div class="col-lg-12">
                                                            <p class="fw-bold">Session</p>
                                                            @foreach ($foreign->schedules as $schedule)
                                                            <div class="d-flex gap-5 text-success fw-bold">
                                                                <p>{{\Carbon\Carbon::parse($schedule->sesi->date)->format('d
                                                                    F Y')}}</p>
                                                                <p>{{$schedule->time_speaker}}</p>
                                                                <p>{{$schedule->sesi->room}}</p>
                                                            </div>
                                                            <p class="fw-bold black mb-1">{{$schedule->sesi->title_ses}}
                                                            </p>
                                                            <p class="black mb-5 border-dashed-bottom-2 pb-3">
                                                                {{$schedule->topic_title}}</p>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn1 "
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
</div>