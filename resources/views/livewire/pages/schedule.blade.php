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

    <section class="faq-general-ques pb-10">
        <div class="container">
            <div class="general-ques">
                <div class="row">
                    <div class="col-lg-4 order-1 order-lg-2 p-2 align-self-baseline" style="
                    position: sticky !important;
                    top: 0 !important;
                    z-index: 1;">
                        <div class="faq-form bg-white rounded box-shadow p-6 me-4 m-sm-0">
                            <div class="form-title mb-4 border-dashed-bottom-2">
                                <h5 class="mb-2"> Filter</h5>
                            </div>
                            <div>
                                <p class="fw-bold black">Date</p>
                                @foreach ($dates as $date)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{ $date }}" id="date-{{ $loop->index }}" wire:model="selectedDates" wire:click="updateSelectedDates('{{ $date }}')">
                                    <label class="form-check-label" for="date-{{ $loop->index }}">
                                        {{ \Carbon\Carbon::parse($date)->format('d F Y') }}
                                    </label>
                                </div>
                                @endforeach

                                <p class="fw-bold black mt-3">Room</p>
                                @foreach ($rooms as $room)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{ $room }}"
                                        id="room-{{ $loop->index }}" wire:model="selectedRooms"
                                        wire:click="updateSelectedRooms('{{ $room }}')">
                                    <label class="form-check-label" for="room-{{ $loop->index }}">
                                        {{ $room }}
                                    </label>
                                </div>
                                @endforeach
                                <p class="fw-bold black mt-3">Sessions</p>
                                @foreach ($categories as $category)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{ $category }}"
                                        id="category-{{ $loop->index }}" wire:model="selectedCategories"
                                        wire:click="updateSelectedCategories('{{ $category }}')">
                                    <label class="form-check-label" for="category-{{ $loop->index }}">
                                        {{ $category }}
                                    </label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 order-2 order-lg-1 p-2">
                        <div class="general-ques-right mx-5">
                            <div class="row gy-3">
                                <div class="px-3 pb-5">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-search"></i>
                                        </span>
                                        <input type="text" class="form-control border" placeholder="Search Schedule"
                                            aria-label="Search Schedule" aria-describedby="basic-addon1"
                                            wire:model.debounce.500ms="search">
                                        <button class="btn" wire:click="increment">Search</button>
                                    </div>
                                </div>
                            </div>

                            @foreach ($groupedSessions as $group)
                            <div class="section-title py-2 text-center text-lg-start">
                                <h4 class="mb-1">{{ \Carbon\Carbon::parse($group['date'])->format('l, d F') }}</h4>
                                <p>{{ $group['category_sesi'] }}</p>
                            </div>
                            <div class="faq-accordion p-4 bg-lightgrey rounded border-2 border-light-subtle ">
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
                                            <div class="accordion-body bg-lightgrey">
                                                <div class="px-0">
                                                    <small class="text-light-grey">{{$sesi->category_sesi}}</small>
                                                    <h4>{{$sesi->title_ses}}</h4>
                                                    <p class="black mb-2">{{$sesi->time}} | {{$sesi->room}}</p>
                                                    <p class="mb-0">Moderator : <span class="black fw-semibold">
                                                            {{$sesi->moderator}}</span></p>
                                                    <p class="">Panelist : <span class="black fw-semibold">
                                                            {{$sesi->panelist}}</span></p>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table rounded table-hover">
                                                        <tbody>
                                                            @foreach ($sesi->schedules as $schedule)
                                                            <tr>
                                                                <td>{{$schedule->time_speaker}}</td>
                                                                <td><span
                                                                        class="black fw-bold">{{$schedule->topic_title}}</span>
                                                                    <br><small>Speaker: {{$schedule->speaker}}</small>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
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