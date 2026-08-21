<div>
    <section class=" relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-l from-[#3C194F] via-[#3C194F] to-[#A93E89]"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-white uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Program at Glance</h2>
        </div>
    </section>

    <div class="px-5 md:px-10 pt-0 mt-10 flex flex-wrap gap-2 justify-end md:justify-center items-center">
        <label class="input input-lg input-warning rounded-lg w-full max-w-6xl">
            <i class="fa fa-search opacity-45 text-sm"></i>
            <input wire:model.live.debounce.750ms="search" type="search" class="grow"
                placeholder="Search Session Title or Room" />
            @if ($search !== '')
            <button type="button" wire:click="resetSearch" class="btn btn-ghost btn-sm" aria-label="Reset search"
                title="Reset search">
                <i class="fa fa-times"></i>
            </button>
            @endif
        </label>
        <a target="_blank" href="{{ asset('download/schedule-apras.pdf') }}" class="btn btn-warning rounded-lg"><i
                class="fa fa-download"></i> Download PDF Schedule</a>
    </div>

    <section class="px-5 md:px-10 pt-0 pb-10 md:py-20 bg-competition">
        <div class="flex items-center justify-center">
            <div x-data="{ openTab: 0 }" class="lg:w-11/12 w-full mx-auto">
                <div class="mb-4 flex flex-wrap gap-2 p-2 bg-white rounded-lg shadow-md">
                    @foreach ($days as $day)
                    <button x-on:click="openTab = {{ $loop->index }}"
                        :class="{ 'bg-warning text-white': openTab === {{ $loop->index }} }"
                        class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">
                        {{ $day['label'] }}
                    </button>
                    @endforeach
                </div>

                @foreach ($days as $day)
                <div x-show="openTab === {{ $loop->index }}" x-cloak
                    class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#A93E89]">
                    <div class="overflow-x-auto">
                        <table class="table min-w-max w-full">
                            <tbody>
                                <tr>
                                    @foreach ($day['rooms'] as $room)
                                    <td class="align-top w-40">
                                        @foreach ($day['sessionsByRoom']->get($room, collect()) as $session)
                                        <button class="hover:shadow-md block w-full my-1 hover:cursor-pointer"
                                            onclick="document.getElementById('modal-{{ $session->id }}').showModal()">
                                            <div class="px-0 py-4 w-full rounded-lg bg-orange-50 hover:bg-orange-100">
                                                <div class="badge badge-sm badge-warning mb-2">{{
                                                    $session->category_sesi }}</div>
                                                <br>
                                                {{ $session->time }} <br>
                                                {{ $session->title_ses }} <br>
                                                <span class="text-xs text-gray-600">
                                                    @if ($session->room == 'room 1' || $session->room == 'room 2' ||
                                                    $session->room == 'room 3')
                                                    The Solitaire Clinic, Bali
                                                    @else
                                                    {{ $session->room }}
                                                    @endif
                                                </span>
                                            </div>
                                        </button>

                                        <dialog id="modal-{{ $session->id }}" class="modal">
                                            <div class="modal-box w-11/12 max-w-5xl text-start">
                                                <div class="flex justify-between mb-3 text-gray-700">
                                                    <div class="text-start">
                                                        <h3 class="mb-0">Date: <span>{{
                                                                \Carbon\Carbon::parse($session->date)->format('d F Y')
                                                                }}</span></h3>
                                                        <h3 class="mb-0">Time: <span>{{ $session->time }}</span></h3>
                                                    </div>
                                                    <p>Room: <span> @if ($session->room == 'room 1' || $session->room ==
                                                            'room 2' ||
                                                            $session->room == 'room 3')
                                                            The Solitaire Clinic, Bali
                                                            @else
                                                            {{ $session->room }}
                                                            @endif</span></p>
                                                </div>
                                                <p class="mb-0 text-gray-700">Session: <span>{{ $session->title_ses
                                                        }}</span></p>
                                                <p class="text-gray-700">Moderator: <span>{{ $session->moderator
                                                        }}</span></p>
                                                <div class="overflow-x-auto mt-5">
                                                    <table class="table text-gray-700">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 18%">Time</th>
                                                                <th>Topic</th>
                                                                <th>Speaker</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($session->schedules as $schedule)
                                                            <tr>
                                                                <th scope="row">{{ $schedule->time_speaker }}</th>
                                                                <td>{{ $schedule->topic_title }}</td>
                                                                <td>{{ $schedule->speaker }}</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="modal-action">
                                                    <form method="dialog">
                                                        <button class="btn">Close</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </dialog>
                                        @endforeach
                                    </td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>