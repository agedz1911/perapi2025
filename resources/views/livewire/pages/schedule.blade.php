<div class="w-full lg:w-11/12">
    <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-b from-[#470858]/80 to-[#9E1F63]/30"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-white uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Scientific Schedule</h2>
        </div>
    </section>

    <section class="pt-10 pb-24 px-2 lg:px-5">
        <div class="w-full">
            <label class="input input-primary rounded-xl input-lg w-full">
                <i class="fa-solid fa-search h-[1em] opacity-50"></i>
                <input wire:model.live.debounce.500ms="search" type="text" class="w-full" required
                    placeholder="Search Session, Topic, Speaker..." />
            </label>
        </div>
        @foreach ($groupedSessions as $group)
        <div class="py-2 text-center lg:text-start mt-3 lg:mt-5 mb-2">
            <h4 class="mb-1 text-lg font-semibold uppercase text-[#92278F] tracking-wider">{{
                \Carbon\Carbon::parse($group['date'])->format('l, d F') }}</h4>
            <p class="font-medium tracking-wider">{{ $group['category_sesi'] }}</p>
        </div>
        @foreach ($group['sesis'] as $sesi)
        <div class="collapse collapse-arrow bg-base-100 border border-base-300">
            <input type="radio" name="my-accordion-2" />
            <div class="collapse-title uppercase font-semibold">{{$sesi->title_ses}}</div>
            <div class="collapse-content text-sm">
                <div class="">
                    <div class="flex flex-wrap justify-between items-end">
                        <div>
                            <p class="mb-1">
                                <span class="font-semibold">Session:</span> {{$sesi->title_ses}}
                            </p>
                            <p class="mb-2"><i class="fa fa-clock text-[#9E1F63]"></i> {{$sesi->time}} | <i
                                    class="fa fa-map-marker text-[#9E1F63]"></i> {{$sesi->room}}</p>
                        </div>
                        <div>
                            {{$sesi->category_sesi}}
                            <p class="font-semibold">Moderator: <span class="font-normal">
                                    {{$sesi->moderator}}</span></p>
                            <p class="font-semibold">Panelists: <span class="font-normal">
                                    {{$sesi->panelist}}</span></p>
                        </div>
                    </div>
                    <div class="overflow-x-auto sm:rounded-lg mt-4 border-t border-dashed border-purple-200">
                        <table class="table table-md">
                            <tbody>
                                @foreach ($sesi->schedules as $schedule)
                                <tr class="border-b border-gray-200 hover:bg-purple-50">
                                    <td>
                                        <p>{{$schedule->time_speaker}}</p>
                                    </td>
                                    <td class="font-semibold">
                                        {{$schedule->topic_title}}
                                        <br><span class="font-normal text-gray-500">Speaker:
                                            {{$schedule->speaker}}</span>
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
        @endforeach
    </section>

    <x-section.footer />
</div>