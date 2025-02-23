<div>
    <section class="banner page-banner position-relative pb-0">
        <div class="overlay">
        </div>
        <div class="container">
            <div class="page-title text-center position-relative py-11">
                <h2 class="text-white text-uppercase">Scientific Schedule</h2>
            </div>
        </div>
    </section>

    <section class="faq-general-ques pb-10 bg-lightgrey">
        <div class="container">
            <div class="general-ques">
                <div class="row">
                    <div class="col-lg-4 order-2 order-lg-1 p-2 align-self-baseline" style="
                    position: sticky !important;
                    top: 0 !important;
                    z-index: 0;">
                        <div class="faq-form bg-white rounded box-shadow p-6 me-4 m-sm-0">
                            <div class="form-title mb-4 border-dashed-bottom-2">
                                <h5 class="mb-2"> Filter</h5>
                            </div>
                            <div>
                                <p class="fw-bold black">Date</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        24 September
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-8 order-1 order-lg-2 p-2">
                        <div class="general-ques-right mx-5">
                            <div class="row gy-3">
                                <div class="sub-email px-3 pb-5">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-search"></i>
                                        </span>
                                        <input type="email" class="form-control border" placeholder="Search Schedule"
                                            aria-label="Search Schedule" aria-describedby="basic-addon1" required>
                                    </div>
                                </div>
                            </div>
                            {{-- @dd($groupedSessions) --}}
                            @foreach ($groupedSessions as $group)
                            <div class="section-title py-2 text-center text-lg-start">
                                <h4 class="mb-1">{{\Carbon\Carbon::parse($group['date'])->format('d M Y')}}</h4>
                                <p>{{ $group['category_sesi']}}</p>
                            </div>
                            <div class="faq-accordion p-4 bg-white rounded border-2 border-light-subtle ">
                                <div class="accordion accordion-faq " id="accordionFlushExample">
                                    @foreach ($group['sesis'] as $sesi)
                                    <div class="accordion-item border mb-1 rounded">
                                        <p class="accordion-header p-4">
                                            <button class="accordion-button collapsed fw-semibold p-0" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#{{$sesi->id}}"
                                                aria-expanded="false" aria-controls="tes">
                                                {{$sesi->title_ses}}
                                            </button>
                                        </p>
                                        <div id="{{$sesi->id}}" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body bg-lightgrey p-6">
                                                <p>{{$sesi->title_ses}}</p>
                                                <p>{{$sesi->time}} | {{$sesi->room}}</p>
                                                @dd($sesi->schedules)
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>