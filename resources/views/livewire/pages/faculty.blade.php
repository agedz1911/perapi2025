<div class="w-full lg:w-11/12 bg-base-100">
    <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-b from-[#470858]/80 to-[#9E1F63]/30"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-white uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Faculties</h2>
        </div>
    </section>

    <section class="mx-auto w-full px-1 lg:px-6 pt-16 pb-12">
        <div class="">
            <div class="w-full px-3">
                <label class="input input-primary rounded-xl input-lg w-full">
                    <i class="fa-solid fa-search h-[1em] opacity-50"></i>
                    <input wire:model.live.debounce.500ms="searchTerm" type="text" class="w-full" required
                        placeholder="Search Faculties.." />
                </label>
            </div>
            <div class="mt-10">
                <!-- name of each tab group should be unique -->
                <div class="tabs tabs-border justify-evenly">
                    <input type="radio" name="my_tabs_2"
                        class="tab uppercase tracking-wider  text-lg text-purple-700 hover:text-[#9E1F63]"
                        aria-label="Indonesian Faculties" checked="checked" />
                    <div class="tab-content border-base-300 bg-purple-50 p-5 rounded-lg">
                        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-5">
                            @foreach ($indofaculties as $indo)
                            <div class="card bg-base-100 shadow-sm ">
                                <figure class="relative">
                                    <img src="{{$indo->image ? asset('storage/' . $indo->image) : "
                                        assets/images/speaker.png"}}" alt="{{$indo->name}}"
                                        class="w-full h-full object-cover rounded">
                                    <button onclick="my_modal_{{$loop->index}}.showModal()"
                                        class="btn bg-purple-700 text-white hover:bg-[#d02ec5] btn-xs rounded-xl absolute right-0 top-1">
                                        <i class="fa fa-info-circle text-green-400"></i> Read more..
                                    </button>
                                </figure>
                                <div class="card-body text-center pt-2">
                                    <h2 onclick="my_modal_{{$loop->index}}.showModal()"
                                        class="text-xl font-semibold text-amber-500 hover:text-purple-700 hover:cursor-pointer">
                                        {{$indo->name}}
                                    </h2>
                                    <p>{{$indo->description}}</p>
                                </div>
                            </div>
                            

                            <dialog id="my_modal_{{$loop->index}}" class="modal">
                                <div class="modal-box w-10/12 max-w-5xl">
                                    <form method="dialog">
                                        <button
                                            class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                    </form>
                                    <div class="flex items-center gap-3 pb-3">
                                        <img class="rounded-full bg-indigo-700/20 shadow w-20 object-cover"
                                            src="{{$indo->image ? asset('storage/' . $indo->image) : "
                                            assets/images/speaker.png"}}" alt="{{$indo->name}}">
                                        <div>
                                            <p class="mb-0"><span
                                                    class="text-amber-500 text-lg font-semibold">{{$indo->name}}</span>
                                                <br>
                                                {{$indo->country}}
                                            </p>
                                            <p class="text-sm text-gray-500">{{$indo->description}}</p>
                                        </div>
                                    </div>
                                    <p class="font-medium text-lg text-gray-700">Session</p>
                                    <div class="border-t pt-5">
                                        @foreach ($indo->schedules as $schedule)
                                        <div class="flex flex-wrap gap-5 text-green-600">
                                            <p>{{\Carbon\Carbon::parse($schedule->sesi->date)->format('d
                                                F Y')}}</p>
                                            <p>{{$schedule->time_speaker}}</p>
                                            <p>{{$schedule->sesi->room}}</p>
                                        </div>
                                        <p class="mb-1">{{$schedule->sesi->title_ses}}
                                        </p>
                                        <p class="text-gray-500 mb-5 border-b border-dashed border-gray-800 pb-3">
                                            {{$schedule->topic_title}}
                                        </p>
                                        @endforeach
                                    </div>
                                    <div class="modal-action">
                                        <form method="dialog">
                                            <!-- if there is a button, it will close the modal -->
                                            <button class="btn">Close</button>
                                        </form>
                                    </div>
                                </div>
                            </dialog>
                            @endforeach
                        </div>
                        <div class="mt-5 border-t border-dashed pt-3">
                            {{ $indofaculties->links() }}
                        </div>
                    </div>

                    <input type="radio" name="my_tabs_2"
                        class="tab uppercase tracking-wider  text-lg text-purple-700 hover:text-[#9E1F63]"
                        aria-label="Foreign faculties" />
                    <div class="tab-content border-base-300 bg-purple-50 p-5 rounded-lg">
                        {{-- @dd($indofaculties) --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
                            @foreach ($foreignfaculties as $foreign)
                            <div class="card bg-base-100 shadow-sm ">
                                <figure class="relative">
                                    <img src="{{$foreign->image ? asset('storage/' . $foreign->image) : "
                                        assets/images/speaker.png"}}" alt="{{$foreign->name}}"
                                        class="w-full h-full object-cover rounded">
                                    <button onclick="my_modal_f{{$loop->index}}.showModal()"
                                        class="btn bg-purple-700 text-white hover:bg-[#d02ec5] btn-xs rounded-xl absolute right-0 top-1">
                                        <i class="fa fa-info-circle text-green-400"></i> Read more..
                                    </button>
                                </figure>
                                <div class="card-body text-center pt-2">
                                    <h2 onclick="my_modal_f{{$loop->index}}.showModal()"
                                        class="text-xl font-semibold text-amber-500 hover:cursor-pointer hover:text-purple-700">
                                        {{$foreign->name}}
                                    </h2>
                                    <p>{{$foreign->description}}</p>
                                </div>
                            </div>

                            <dialog id="my_modal_f{{$loop->index}}" class="modal">
                                <div class="modal-box w-10/12 max-w-5xl">
                                    <form method="dialog">
                                        <button
                                            class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                    </form>
                                    <div class="flex items-center gap-3 pb-3">
                                        <img class="rounded-full bg-indigo-700/20 shadow w-20 object-cover"
                                            src="{{$foreign->image ? asset('storage/' . $foreign->image) : "
                                            assets/images/speaker.png"}}" alt="{{$foreign->name}}">
                                        <div>
                                            <p class="mb-0"><span
                                                    class="text-amber-500 text-lg font-semibold">{{$foreign->name}}</span>
                                                <br>
                                                {{$foreign->country}}
                                            </p>
                                            <p class="text-sm text-gray-500">{{$foreign->description}}</p>
                                        </div>
                                    </div>
                                    <p class="font-medium text-lg text-gray-700">Session</p>
                                    <div class="border-t pt-5">
                                        @foreach ($foreign->schedules as $schedule)
                                        <div class="flex flex-wrap gap-5 text-green-600">
                                            <p>{{\Carbon\Carbon::parse($schedule->sesi->date)->format('d
                                                F Y')}}</p>
                                            <p>{{$schedule->time_speaker}}</p>
                                            <p>{{$schedule->sesi->room}}</p>
                                        </div>
                                        <p class="mb-1">{{$schedule->sesi->title_ses}}
                                        </p>
                                        <p class="text-gray-500 mb-5 border-b border-dashed border-gray-800 pb-3">
                                            {{$schedule->topic_title}}
                                        </p>
                                        @endforeach
                                    </div>
                                    <div class="modal-action">
                                        <form method="dialog">
                                            <!-- if there is a button, it will close the modal -->
                                            <button class="btn">Close</button>
                                        </form>
                                    </div>
                                </div>
                            </dialog>
                            @endforeach
                        </div>
                        <div class="mt-5 border-t border-dashed pt-3">
                            {{ $foreignfaculties->links() }}
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <x-section.footer />
</div>