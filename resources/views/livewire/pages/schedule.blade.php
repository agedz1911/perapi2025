<div class="w-full lg:w-11/12">
    <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-b from-[#470858]/80 to-[#9E1F63]/30"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-white uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Scientific Schedule</h2>
        </div>
    </section>

    <section class="pt-10 pb-24 px-2 lg:px-5 bg-gray-100">
        <div class="">
            <div class="">
                <div class="px-2 pb-5">
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <i class="fa-solid fa-search w-4 h-4 text-gray-500"></i>
                        </div>
                        <input wire:model.live.debounce.500ms="search" type="text" id="default-search"
                            class="block w-full p-4 ps-10 text-sm text-gray-700 border border-gray-300 rounded-lg bg-gray-50 focus:ring-purple-500 focus:border-purple-500 "
                            placeholder="Search Session, Topic, Speaker..." required />
                    </div>
                    <!-- <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fa-solid fa-search"></i>
                        </span>
                        <input type="text" class="form-control border" placeholder="Search Schedule"
                            aria-label="Search Schedule" aria-describedby="basic-addon1"
                            wire:model.live.debounce.500ms="search">
                    </div> -->
                </div>
            </div>

            <div>
                @foreach ($groupedSessions as $group)
                <div class="py-2 text-center lg:text-start">
                    <h4 class="mb-1 text-2xl font-black text-[#92278F] tracking-wider">{{
                        \Carbon\Carbon::parse($group['date'])->format('l, d F') }}</h4>
                    <p class="text-lg font-semibold tracking-wider">{{ $group['category_sesi'] }}</p>
                </div>

                <div class="px-3 py-5 bg-white rounded-xl mt-3">
                    @foreach ($group['sesis'] as $sesi)
                    <div id="accordion-color" data-accordion="open" data-active-classes="bg-[#92278F] text-white">
                        <h2 id="accordion-heading-{{$sesi->id}}">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 hover:text-white border border-b-0 border-gray-300 rounded-lg focus:ring-1 focus:ring-blue-200 hover:bg-purple-800 gap-3"
                                data-accordion-target="#accordion-body-{{$sesi->id}}" aria-expanded="true"
                                aria-controls="accordion-body-{{$sesi->id}}">
                                <span>{{$sesi->title_ses}}</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-body-{{$sesi->id}}" class="hidden"
                            aria-labelledby="accordion-heading-{{$sesi->id}}">
                            <div class="p-5">
                                <div
                                    class="flex flex-wrap justify-between items-end border-b border-dashed border-purple-200">
                                    <div>
                                        <p class="text-purple-400 text-sm mb-1 font-medium">
                                            {{$sesi->category_sesi}}</p>
                                        <h4 class="text-xl tracking-wide uppercase font-semibold">
                                            {{$sesi->title_ses}}</h4>
                                        <p class="black mb-2">{{$sesi->time}} | {{$sesi->room}}</p>
                                    </div>
                                    <div>
                                        <p class="mb-0">Moderator : <span class="font-semibold">
                                                {{$sesi->moderator}}</span></p>
                                        <p class="">Panelist : <span class="font-semibold">
                                                {{$sesi->panelist}}</span></p>
                                    </div>
                                </div>
                                <div class="relative overflow-x-auto sm:rounded-lg mt-4">
                                    <table class="w-full text-left rtl:text-right text-gray-500">

                                        <tbody>
                                            @foreach ($sesi->schedules as $schedule)
                                            <tr class="bg-white border-b border-gray-200 hover:bg-purple-50">

                                                <td>
                                                    <p>{{$schedule->time_speaker}}</p>
                                                </td>
                                                <td>
                                                    <span class="font-semibold">{{$schedule->topic_title}}</span>
                                                    <br><small>Speaker:
                                                        {{$schedule->speaker}}</small>
                                                </td>

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
                @endforeach
            </div>
        </div>
    </section>

    <x-section.footer />
</div>