<div class="w-full lg:w-11/12">
    <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-b from-[#470858]/80 to-[#9E1F63]/30"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-white uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Scientific Schedule</h2>
        </div>
    </section>

    <div class="px-5 lg:px-10 mt-10">
        <label class="input input-lg w-full">
            <i class="fa fa-search opacity-45 text-sm"></i>
            <input wire:model.live='search' type="text" class="grow" placeholder="Search Topic, Speaker, Room" />
        </label>
    </div>

    <section class="pt-10 pb-24 px-2 lg:px-5">
        <div class="flex flex-col lg:flex-row justify-between gap-4">
            <div class="drawer drawer-end block lg:hidden z-30">
                <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
                <div class="drawer-content">
                    <!-- Page content here -->
                    <label for="my-drawer-4" class="drawer-button btn bg-purple-700 hover:bg-indigo-600 text-white rounded-lg px-3"><i
                            class="fa-solid fa-filter"></i> Filter</label>
                </div>
                <div class="drawer-side">
                    <label for="my-drawer-4" aria-label="close sidebar" class="drawer-overlay"></label>
                    <div class="menu bg-base-200 text-base-content min-h-full w-80 p-4">
                        <!-- Sidebar content here -->
                        <div class="my-auto">
                            <h2 class="card-title">Filter</h2>
                            <fieldset class="fieldset p-4 bg-base-100 border border-base-300 rounded-box w-64">
                                <legend class="fieldset-legend">Date</legend>
                                <div class="flex items-center">
                                    <select wire:model.live='date' class="select flex-grow">
                                        <option value="0">Choose a date</option>
                                        @foreach ($uniqDates as $date)
                                        <option value="{{ $date }}">{{ \Carbon\Carbon::parse($date)->format('d F Y') }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @if($date)
                                    <button wire:click="resetDate" class="btn btn-xs btn-error ml-2">X</button>
                                    @endif
                                </div>
                            </fieldset>
                            <fieldset class="fieldset p-4 bg-base-100 border border-base-300 rounded-box w-64">
                                <legend class="fieldset-legend">Session</legend>
                                <div class="flex items-center">
                                    <select wire:model.live='category' class="select flex-grow">
                                        <option value="0">Choose a Session</option>
                                        @foreach ($uniqCategories as $item)
                                        <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                    @if($category)
                                    <button wire:click="resetCategory" class="btn btn-xs btn-error ml-2">X</button>
                                    @endif
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card hidden lg:block lg:w-1/4 bg-base-100 order-1 lg:order-2 shadow-sm">
                <div class="card-body">
                    <h2 class="card-title">Filter</h2>
                    <fieldset class="fieldset p-4 bg-base-100 border border-base-300 rounded-box w-64">
                        <legend class="fieldset-legend">Date</legend>
                        <div class="flex items-center">
                            <select wire:model.live='date' class="select flex-grow">
                                <option value="0">Choose a date</option>
                                @foreach ($uniqDates as $date)
                                <option value="{{ $date }}">{{ \Carbon\Carbon::parse($date)->format('d F Y') }}</option>
                                @endforeach
                            </select>
                            @if($date)
                            <button wire:click="resetDate" class="btn btn-xs btn-error ml-2">X</button>
                            @endif
                        </div>
                    </fieldset>
                    <fieldset class="fieldset p-4 bg-base-100 border border-base-300 rounded-box w-64">
                        <legend class="fieldset-legend">Session</legend>
                        <div class="flex items-center">
                            <select wire:model.live='category' class="select flex-grow">
                                <option value="0">Choose a Session</option>
                                @foreach ($uniqCategories as $item)
                                <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                            @if($category)
                            <button wire:click="resetCategory" class="btn btn-xs btn-error ml-2">X</button>
                            @endif
                        </div>
                    </fieldset>
                </div>
            </div>

            <div class="w-full lg:w-3/4 order-2 lg:order-1">
                @foreach ($uniqDates as $date)
                <div class="text-center lg:text-start border-t border-dashed pt-2">
                    <h2 class="text-lg font-semibold uppercase text-[#92278F] tracking-wider">
                        {{\Carbon\Carbon::parse($date)->format('l, d F')}}</h2>
                </div>
                @foreach ($uniqCategories as $item)
                <p class="font-semibold tracking-wider my-5"><i
                        class="fa fa-angle-right text-sm text-purple-700 font-semibold"></i> {{$item}}</p>
                @foreach ($atglances as $atglance)
                @if ($atglance->category_sesi == $item && $atglance->date == $date)

                <div class="collapse bg-base-100 border border-base-300">
                    <input type="radio" name="my-accordion-1" />
                    <div class="collapse-title font-semibold">{{$atglance->title_ses}} - <span class="text-xs"><i
                                class="fa fa-map-marker text-[#9E1F63]"></i> {{$atglance->room}} </span></div>
                    <div class="collapse-content text-sm">
                        <div class="flex flex-wrap justify-between gap-4 items-start">
                            <div>
                                <p class="mb-1">
                                    <span class="font-semibold">Session:</span> {{$atglance->title_ses}}
                                </p>
                                <p class="mb-2"><i class="fa fa-clock text-[#9E1F63]"></i> {{$atglance->time}} | <i
                                        class="fa fa-map-marker text-[#9E1F63]"></i> {{$atglance->room}}</p>
                            </div>
                            <div>
                                {{-- {{$atglance->category_sesi}} --}}
                                <p class="font-semibold">Moderator: <span class="font-normal">
                                        {{$atglance->moderator}}</span></p>
                                <p class="font-semibold">Panelists: <br> <span class="font-normal">
                                        {{$atglance->panelist}}</span></p>
                            </div>
                        </div>
                        <div class="overflow-x-auto sm:rounded-lg mt-4 border-t border-dashed border-purple-200">
                            <table class="table table-md">
                                <tbody>
                                    @foreach ($atglance->schedules as $schedule)
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
                @endif
                @endforeach
                @endforeach
                @endforeach
            </div>
        </div>
    </section>

    <x-section.footer />
</div>