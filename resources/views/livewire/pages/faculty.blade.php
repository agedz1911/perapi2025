<div class="w-full lg:w-11/12">
    <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-b from-[#470858]/80 to-[#9E1F63]/30"></div>

        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-white uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Faculties</h2>
        </div>

    </section>

    <section class="mx-auto w-full px-1 lg:px-6 pt-16 pb-12">
        <div class="container">
            <div class="px-5">
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <i class="fa-solid fa-search w-4 h-4 text-gray-500 dark:text-gray-400"></i>
                    </div>
                    <input type="text" wire:model.live.debounce.500ms='searchTerm'
                        class="block w-full p-4 ps-10 text-sm text-gray-700 border border-gray-300 rounded-lg bg-purple-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search Faculties..." />
                </div>
            </div>
            <div class="">
                <div class="mb-4 border-b border-amber-200 dark:border-amber-700 mt-5">
                    <ul class="flex flex-wrap justify-evenly  font-medium text-center" id="default-styled-tab"
                        data-tabs-toggle="#default-styled-tab-content"
                        data-tabs-active-classes="text-purple-600 hover:text-purple-600 dark:text-purple-500 dark:hover:text-purple-500 border-purple-600 dark:border-purple-500"
                        data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
                        role="tablist">
                        <li class="me-2" role="presentation">
                            <button class="inline-block md:w-52 p-4 border-b-2 rounded-t-lg" id="indonesia-styled-tab"
                                data-tabs-target="#styled-indonesia" type="button" role="tab" aria-controls="indonesia"
                                aria-selected="false">Indonesian Faculties</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button
                                class="inline-block p-4 md:w-52 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                id="foreign-styled-tab" data-tabs-target="#styled-foreign" type="button" role="tab"
                                aria-controls="foreign" aria-selected="false">Foreign Faculties</button>
                        </li>
                    </ul>
                </div>
                <div id="default-styled-tab-content">
                    <div class="hidden p-4 rounded-lg" id="styled-indonesia" role="tabpanel"
                        aria-labelledby="indonesia-tab">
                        @foreach ($indofaculties as $indo)
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                            <div class="bg-white shadow rounded-lg transition-all duration-100 pt-0 pb-[28px] px-0 text-center hover:shadow-md
                            border-t-4 border-transparent hover:border-amber-400 ">
                                <div class="rounded-t-lg w-full h-full max-h-80 bg-indigo-700/20 relative mx-auto mb-5">
                                    <img src="{{$indo->image ? asset('storage/' . $indo->image) : "
                                        assets/images/speaker.png"}}" alt="{{$indo->name}}"
                                        class="w-full h-full object-cover rounded">
                                    <div class="absolute top-2 right-2">
                                        <button type="button" data-drawer-target="drawer-right-indo{{$loop->index}}"
                                            data-drawer-show="drawer-right-indo{{$loop->index}}"
                                            data-drawer-placement="right"
                                            aria-controls="drawer-right-indo{{$loop->index}}"
                                            class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-xs px-2 py-2 text-center  dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900"><i
                                                class="fa fa-info-circle"></i> Read more</button>
                                    </div>
                                </div>
                                <div class="mb-4 lg:mb-7">
                                    <h4 data-drawer-target="drawer-right-indo{{$loop->index}}"
                                        data-drawer-show="drawer-right-indo{{$loop->index}}"
                                        data-drawer-placement="right" aria-controls="drawer-right-indo{{$loop->index}}"
                                        class="text-2xl mb-1 hover:cursor-pointer hover:text-purple-800 font-semibold text-amber-500">
                                        {{$indo->name}}</h4>
                                    <div class="text-gray-500">{{$indo->description}}</div>
                                </div>
                            </div>
                        </div>
                        <!-- drawer component -->
                        <div id="drawer-right-indo{{$loop->index}}"
                            class="fixed top-0 right-0 z-50 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-96 lg:w-1/3 dark:bg-gray-800"
                            tabindex="-1" aria-labelledby="drawer-right-label">
                            <h5 id="drawer-right-label"
                                class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400">
                                Faculty Details</h5>
                            <button type="button" data-drawer-hide="drawer-right-indo{{$loop->index}}"
                                aria-controls="drawer-right-indo{{$loop->index}}"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
                                <i class="fa fa-x"></i>
                                <span class="sr-only">Close</span>
                            </button>
                            <div class="border-t border-gray-600 border-dashed ">
                                <div class="mt-5">
                                    <div class="flex items-center gap-3">
                                        <img class="rounded-full bg-indigo-700/20 shadow w-20 object-cover"
                                            src="{{$indo->image ? asset('storage/' . $indo->image) : "
                                            assets/images/speaker.png"}}" alt="{{$indo->name}}">
                                        <div>
                                            <p class="text-gray-500 mb-0"><span
                                                    class="text-amber-500 font-semibold">{{$indo->name}}</span> <br>
                                                {{$indo->country}}
                                            </p>
                                            <p class="text-sm text-gray-500">{{$indo->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5">
                                <div class="">
                                    <p class="font-semibold text-gray-700">Session</p>
                                    @foreach ($indo->schedules as $schedule)
                                    <div class="flex flex-wrap gap-5 text-green-600">
                                        <p>{{\Carbon\Carbon::parse($schedule->sesi->date)->format('d
                                            F Y')}}</p>
                                        <p>{{$schedule->time_speaker}}</p>
                                        <p>{{$schedule->sesi->room}}</p>
                                    </div>
                                    <p class="mb-1">{{$schedule->sesi->title_ses}}
                                    </p>
                                    <p class="text-gray-700 mb-5 border-b border-dashed border-gray-800 pb-3">
                                        {{$schedule->topic_title}}
                                    </p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- end drawer component -->
                    </div>
                    <!--end tab -->

                    <!--start tab -->
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-foreign" role="tabpanel"
                        aria-labelledby="foreign-tab">
                        @foreach ($foreignfaculties as $foreign)
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                            <div class="bg-white shadow rounded-lg transition-all duration-100 pt-0 pb-[28px] px-0 text-center hover:shadow-md
                            border-t-4 border-transparent hover:border-amber-400 ">
                                <div class="rounded-t-lg w-full h-full max-h-80 bg-indigo-700/20 relative mx-auto mb-5">
                                    <img src="{{$foreign->image ? asset('storage/' . $foreign->image) : "
                                        assets/images/speaker.png"}}" alt="{{$foreign->name}}"
                                        class="w-full h-full object-cover rounded">
                                    <div class="absolute top-2 right-2">
                                        <button type="button" data-drawer-target="drawer-right-foreign-{{$loop->index}}"
                                            data-drawer-show="drawer-right-foreign-{{$loop->index}}" data-drawer-placement="right"
                                            aria-controls="drawer-right-foreign-{{$loop->index}}"
                                            class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-xs px-2 py-2 text-center  dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900"><i
                                                class="fa fa-info-circle"></i> Read more</button>
                                    </div>
                                </div>
                                <div class="mb-4 lg:mb-7">
                                    <h4 data-drawer-target="drawer-right-foreign-{{$loop->index}}"
                                        data-drawer-show="drawer-right-foreign-{{$loop->index}}" data-drawer-placement="right"
                                        aria-controls="drawer-right-foreign-{{$loop->index}}"
                                        class="text-2xl mb-1 hover:cursor-pointer hover:text-purple-800 font-semibold text-amber-500">
                                        {{$foreign->name}}</h4>
                                    <p class="text-sm text-gray-500">{{$foreign->description}}</p>
                                </div>
                            </div>
                        </div>
                        <!-- drawer component -->
                        <div id="drawer-right-foreign-{{$loop->index}}"
                            class="fixed top-0 right-0 z-50 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-80 lg:w-1/4 dark:bg-gray-800"
                            tabindex="-1" aria-labelledby="drawer-right-label">
                            <h5 id="drawer-right-label"
                                class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400">
                                Faculty Details</h5>
                            <button type="button" data-drawer-hide="drawer-right-foreign-{{$loop->index}}"
                                aria-controls="drawer-right-foreign-{{$loop->index}}"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
                                <i class="fa fa-x"></i>
                                <span class="sr-only">Close</span>
                            </button>
                            <div class="border-t border-gray-600 border-dashed ">
                                <div class="mt-5">
                                    <div class="flex items-center gap-3">
                                        <img class="rounded-full bg-indigo-700/20 shadow w-20 object-cover"
                                            src="{{$foreign->image ? asset('storage/' . $foreign->image) : "
                                            assets/images/speaker.png"}}" alt="{{$foreign->name}}">
                                        <div>
                                            <p class="text-gray-500 mb-0"><span
                                                    class="text-amber-500 font-semibold">{{$foreign->name}}</span> <br>
                                                {{$foreign->country}}
                                            </p>
                                            <p class="text-sm text-gray-500">{{$foreign->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5">
                                <div class="">
                                    <p class="font-semibold text-gray-700">Session</p>
                                    @foreach ($foreign->schedules as $schedule)
                                    <div class="flex flex-wrap gap-5 text-green-600">
                                        <p>{{\Carbon\Carbon::parse($schedule->sesi->date)->format('d
                                            F Y')}}</p>
                                        <p>{{$schedule->time_speaker}}</p>
                                        <p>{{$schedule->sesi->room}}</p>
                                    </div>
                                    <p class="mb-1">{{$schedule->sesi->title_ses}}
                                    </p>
                                    <p class="text-gray-700 mb-5 border-b border-dashed border-gray-800 pb-3">
                                        {{$schedule->topic_title}}
                                    </p>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                        @endforeach
                        <!-- end drawer component -->
                    </div>
                    <!-- end tab -->
                </div>
            </div>
        </div>
    </section>

    <x-section.footer />
</div>