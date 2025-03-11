<div class="w-full lg:w-11/12">
    <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-b from-[#470858]/80 to-[#9E1F63]/30"></div>


        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-white uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Program at Glance</h2>
        </div>

    </section>


    <section>
        <!-- HTML STATIC -->
        <div class="container">
            <nav>
                <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-25-tab" data-bs-toggle="tab" data-bs-target="#nav-25"
                        type="button" role="tab" aria-controls="nav-25" aria-selected="false">25 September</button>
                    <button class="nav-link" id="nav-26-tab" data-bs-toggle="tab" data-bs-target="#nav-26" type="button"
                        role="tab" aria-controls="nav-26" aria-selected="false">26 September</button>
                    <button class="nav-link" id="nav-27-tab" data-bs-toggle="tab" data-bs-target="#nav-27" type="button"
                        role="tab" aria-controls="nav-27" aria-selected="false">27 September</button>
                </div>
            </nav>
            <div class="tab-content mt-5" id="nav-tabContent">
                <div class="tab-pane show active" id="nav-25" role="tabpanel" aria-labelledby="nav-25-tab" tabindex="0">

                    <div class="row">
                        <div class="col-lg-4 col-12 mt-4 pt-2">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true">Main Hall</button>
                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-profile" type="button" role="tab"
                                    aria-controls="v-pills-profile" aria-selected="false">Convention 1</button>

                                <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-messages" type="button" role="tab"
                                    aria-controls="v-pills-messages" aria-selected="false">Convention 2</button>
                                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-settings" type="button" role="tab"
                                    aria-controls="v-pills-settings" aria-selected="false">Room 1</button>
                            </div>
                        </div>
                        <div class="col-lg-8 col-12 mt-4 pt-2">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab" tabindex="0">
                                    <div class="row">
                                        <div class="input-group mb-4">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa-solid fa-search"></i>
                                            </span>
                                            <input type="text" class="form-control border" placeholder="Search Schedule"
                                                aria-label="Search Schedule" aria-describedby="basic-addon1"
                                                wire:model.live.debounce.500ms="search">
                                        </div>
                                        @foreach ($atglances as $atglance)
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#{{$loop->index}}">
                                                <div class="card-body">
                                                    <small
                                                        class="position-absolute top-0 end-0 mt-3 bg-blue rounded text-white px-2">{{$atglance->category_sesi}}</small>
                                                    <p class="black fw-bold">{{$atglance->time}}</p>
                                                    <p class="mb-0">{{$atglance->title_ses}}</p>
                                                    <small>Moderator: <span
                                                            class="text-muted fw-bold">{{$atglance->moderator}}</span></small>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab" tabindex="0">...</div>
                                <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel"
                                    aria-labelledby="v-pills-disabled-tab" tabindex="0">...</div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                    aria-labelledby="v-pills-messages-tab" tabindex="0">...</div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                    aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
                            </div>
                        </div>

                        <!-- Modal -->
                        @foreach ($atglances as $atglance)
                        <div class="modal fade" id="{{$loop->index}}" tabindex="-1" aria-labelledby="InaSPUModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">{{$atglance->title_ses}}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="d-flex flex-row justify-content-between">
                                            <div>
                                                <p class="mb-0">Date :<span class="fw-bold black">
                                                        {{\Carbon\Carbon::parse($atglance->date)->format('d F Y')}}</p>
                                                <p class="">Time :<span class="fw-bold black"> {{$atglance->time}}
                                                    </span></p>
                                            </div>
                                            <div>
                                                <p class="">Room :<span class="fw-bold black"> {{$atglance->room}}
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <p class="mb-0">Session : <span class="fw-bold black">
                                                {{$atglance->title_ses}}</span></p>
                                        <p class="">Moderator : <span class="fw-bold black"> {{$atglance->moderator}}
                                            </span></p>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width: 18%">Time</th>
                                                    <th scope="col">Topic</th>
                                                    <th scope="col">Speaker</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($atglance->schedules as $schedule)

                                                <tr>
                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                    <td>{{$schedule->topic_title}}</td>
                                                    <td>{{$schedule->speaker}}</td>
                                                </tr>
                                                @endforeach


                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn1 " data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-26" role="tabpanel" aria-labelledby="nav-26-tab" tabindex="0">3...
                </div>
                <div class="tab-pane fade" id="nav-27" role="tabpanel" aria-labelledby="nav-27-tab" tabindex="0">4...
                </div>
            </div>

        </div>
    </section>

    <x-section.footer />
</div>