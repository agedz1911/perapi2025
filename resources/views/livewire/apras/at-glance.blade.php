<div>
    <section class=" relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-l from-[#3C194F] via-[#3C194F] to-[#A93E89]"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-white uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Program at Glance</h2>
        </div>
    </section>

    <section class="pt-10 pb-24 px-2 lg:px-5 bg-competition">
        {{-- <p>apras</p> --}}
        {{-- name of each tab group should be unique  --}}
        <div class="tabs tabs-border justify-evenly">
            <input type="radio" name="my_tabs_2" checked="checked"
                class="tab uppercase tracking-wider text-[#440368] hover:text-[#9E1F63]"
                aria-label="2 September 2026" />
            <div class="tab-content">
                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr class="mb-2">
                                <th style="width: 20%;">Pecatu Hall 1 & 2</th>
                                <th style="width: 16%;">Mengwi 1 & 2</th>
                                <th style="width: 16%;">Mengwi 3 & 5</th>
                                <th style="width: 16%;">Mengwi 6</th>
                                <th style="width: 16%;">Mengwi 7</th>
                                <th style="width: 16%;">Mengwi 8</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td class="align-top">

                                    @foreach ($dua as $pecatu1tgl2)
                                    @if ($pecatu1tgl2->room == 'Pecatu 1&2')
                                    <button class="hover:shadow-md hover:shadow-slate-300 block w-full my-1"
                                        onclick="pecatu1tgl2{{$pecatu1tgl2->id}}.showModal()">
                                        <div
                                            class="border border-purple-500 bg-fuchsia-50 px-0 py-4 w-full rounded-md ">
                                            <div class="badge badge-sm badge-warning mb-2">{{$pecatu1tgl2->category_sesi}}
                                            </div>
                                            <br>
                                            {{$pecatu1tgl2->time}} <br>
                                            {{$pecatu1tgl2->title_ses}}
                                        </div>
                                    </button>
                                    @endif

                                    <dialog id="pecatu1tgl2{{$pecatu1tgl2->id}}" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl text-start">
                                            <div class="flex justify-between mb-3 text-gray-700">
                                                <div class="text-start">
                                                    <h3 class="mb-0">Date: <span class="">
                                                            {{\Carbon\Carbon::parse($pecatu1tgl2->date)->format('d
                                                            F
                                                            Y')}}</span></h3>
                                                    <h3 class="mb-0">Time: <span class="">
                                                            {{$pecatu1tgl2->time}}</span></h3>
                                                </div>
                                                <div>
                                                    <p class="">Room :<span class="">
                                                            {{$pecatu1tgl2->room}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-gray-700">Session : <span class="">
                                                    {{$pecatu1tgl2->title_ses}}</span></p>
                                            <p class="text-gray-700">Moderator : <span class="">
                                                    {{$pecatu1tgl2->moderator}}
                                                </span></p>
                                            <div class="overflow-x-auto mt-5">
                                                <table class="table text-gray-700">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 18%">Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($pecatu1tgl2->schedules as $schedule)
                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-action">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                    @endforeach
                                </td>
                                <td class="align-top">

                                    @foreach ($dua as $mengwi1tgl2)
                                    @if ($mengwi1tgl2->room == 'Mengwi 1&2')
                                    <button class="hover:shadow-md hover:shadow-slate-300 block w-full my-1"
                                        onclick="mengwi1tgl2{{$mengwi1tgl2->id}}.showModal()">
                                        <div
                                            class="border border-purple-500 bg-fuchsia-50 px-0 py-4 w-full rounded-md ">
                                            <div class="badge badge-sm badge-warning mb-2">{{$mengwi1tgl2->category_sesi}}
                                            </div>
                                            <br>
                                            {{$mengwi1tgl2->time}} <br>
                                            {{$mengwi1tgl2->title_ses}}
                                        </div>
                                    </button>
                                    @endif

                                    <dialog id="mengwi1tgl2{{$mengwi1tgl2->id}}" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl text-start">
                                            <div class="flex justify-between mb-3 text-gray-700">
                                                <div class="text-start">
                                                    <h3 class="mb-0">Date: <span class="">
                                                            {{\Carbon\Carbon::parse($mengwi1tgl2->date)->format('d
                                                            F
                                                            Y')}}</span></h3>
                                                    <h3 class="mb-0">Time: <span class="">
                                                            {{$mengwi1tgl2->time}}</span></h3>
                                                </div>
                                                <div>
                                                    <p class="">Room :<span class="">
                                                            {{$mengwi1tgl2->room}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-gray-700">Session : <span class="">
                                                    {{$mengwi1tgl2->title_ses}}</span></p>
                                            <p class="text-gray-700">Moderator : <span class="">
                                                    {{$mengwi1tgl2->moderator}}
                                                </span></p>
                                            <div class="overflow-x-auto mt-5">
                                                <table class="table text-gray-700">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 18%">Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($mengwi1tgl2->schedules as $schedule)
                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-action">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                    @endforeach
                                </td>
                                <td class="align-top">

                                    @foreach ($dua as $mengwi3tgl2)
                                    @if ($mengwi3tgl2->room == 'Mengwi 3&5')
                                    <button class="hover:shadow-md hover:shadow-slate-300 block w-full my-1"
                                        onclick="mengwi3tgl2{{$mengwi3tgl2->id}}.showModal()">
                                        <div
                                            class="border border-purple-500 bg-fuchsia-50 px-0 py-4 w-full rounded-md ">
                                            <div class="badge badge-sm badge-warning mb-2">{{$mengwi3tgl2->category_sesi}}
                                            </div>
                                            <br>
                                            {{$mengwi3tgl2->time}} <br>
                                            {{$mengwi3tgl2->title_ses}}
                                        </div>
                                    </button>
                                    @endif

                                    <dialog id="mengwi3tgl2{{$mengwi3tgl2->id}}" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl text-start">
                                            <div class="flex justify-between mb-3 text-gray-700">
                                                <div class="text-start">
                                                    <h3 class="mb-0">Date: <span class="">
                                                            {{\Carbon\Carbon::parse($mengwi3tgl2->date)->format('d
                                                            F
                                                            Y')}}</span></h3>
                                                    <h3 class="mb-0">Time: <span class="">
                                                            {{$mengwi3tgl2->time}}</span></h3>
                                                </div>
                                                <div>
                                                    <p class="">Room :<span class="">
                                                            {{$mengwi3tgl2->room}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-gray-700">Session : <span class="">
                                                    {{$mengwi3tgl2->title_ses}}</span></p>
                                            <p class="text-gray-700">Moderator : <span class="">
                                                    {{$mengwi3tgl2->moderator}}
                                                </span></p>
                                            <div class="overflow-x-auto mt-5">
                                                <table class="table text-gray-700">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 18%">Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($mengwi3tgl2->schedules as $schedule)
                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-action">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                    @endforeach
                                </td>
                                <td class="align-top">

                                    @foreach ($dua as $mengwi6tgl2)
                                    @if ($mengwi6tgl2->room == 'Mengwi 6')
                                    <button class="hover:shadow-md hover:shadow-slate-300 block w-full my-1"
                                        onclick="mengwi6tgl2{{$mengwi6tgl2->id}}.showModal()">
                                        <div
                                            class="border border-purple-500 bg-fuchsia-50 px-0 py-4 w-full rounded-md ">
                                            <div class="badge badge-sm badge-warning mb-2">{{$mengwi6tgl2->category_sesi}}
                                            </div>
                                            <br>
                                            {{$mengwi6tgl2->time}} <br>
                                            {{$mengwi6tgl2->title_ses}}
                                        </div>
                                    </button>
                                    @endif

                                    <dialog id="mengwi6tgl2{{$mengwi6tgl2->id}}" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl text-start">
                                            <div class="flex justify-between mb-3 text-gray-700">
                                                <div class="text-start">
                                                    <h3 class="mb-0">Date: <span class="">
                                                            {{\Carbon\Carbon::parse($mengwi6tgl2->date)->format('d
                                                            F
                                                            Y')}}</span></h3>
                                                    <h3 class="mb-0">Time: <span class="">
                                                            {{$mengwi6tgl2->time}}</span></h3>
                                                </div>
                                                <div>
                                                    <p class="">Room :<span class="">
                                                            {{$mengwi6tgl2->room}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-gray-700">Session : <span class="">
                                                    {{$mengwi6tgl2->title_ses}}</span></p>
                                            <p class="text-gray-700">Moderator : <span class="">
                                                    {{$mengwi6tgl2->moderator}}
                                                </span></p>
                                            <div class="overflow-x-auto mt-5">
                                                <table class="table text-gray-700">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 18%">Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($mengwi6tgl2->schedules as $schedule)
                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-action">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                    @endforeach
                                </td>
                                <td class="align-top">

                                    @foreach ($dua as $mengwi7tgl2)
                                    @if ($mengwi7tgl2->room == 'Mengwi 7')
                                    <button class="hover:shadow-md hover:shadow-slate-300 block w-full my-1"
                                        onclick="mengwi7tgl2{{$mengwi7tgl2->id}}.showModal()">
                                        <div
                                            class="border border-purple-500 bg-fuchsia-50 px-0 py-4 w-full rounded-md ">
                                            <div class="badge badge-sm badge-warning mb-2">{{$mengwi7tgl2->category_sesi}}
                                            </div>
                                            <br>
                                            {{$mengwi7tgl2->time}} <br>
                                            {{$mengwi7tgl2->title_ses}}
                                        </div>
                                    </button>
                                    @endif

                                    <dialog id="mengwi7tgl2{{$mengwi7tgl2->id}}" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl text-start">
                                            <div class="flex justify-between mb-3 text-gray-700">
                                                <div class="text-start">
                                                    <h3 class="mb-0">Date: <span class="">
                                                            {{\Carbon\Carbon::parse($mengwi7tgl2->date)->format('d
                                                            F
                                                            Y')}}</span></h3>
                                                    <h3 class="mb-0">Time: <span class="">
                                                            {{$mengwi7tgl2->time}}</span></h3>
                                                </div>
                                                <div>
                                                    <p class="">Room :<span class="">
                                                            {{$mengwi7tgl2->room}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-gray-700">Session : <span class="">
                                                    {{$mengwi7tgl2->title_ses}}</span></p>
                                            <p class="text-gray-700">Moderator : <span class="">
                                                    {{$mengwi7tgl2->moderator}}
                                                </span></p>
                                            <div class="overflow-x-auto mt-5">
                                                <table class="table text-gray-700">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 18%">Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($mengwi7tgl2->schedules as $schedule)
                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-action">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                    @endforeach
                                </td>
                                <td class="align-top">

                                    @foreach ($dua as $mengwi8tgl2)
                                    @if ($mengwi8tgl2->room == 'Mengwi 8')
                                    <button class="hover:shadow-md hover:shadow-slate-300 block w-full my-1"
                                        onclick="mengwi8tgl2{{$mengwi8tgl2->id}}.showModal()">
                                        <div
                                            class="border border-purple-500 bg-fuchsia-50 px-0 py-4 w-full rounded-md ">
                                            <div class="badge badge-sm badge-warning mb-2">{{$mengwi8tgl2->category_sesi}}
                                            </div>
                                            <br>
                                            {{$mengwi8tgl2->time}} <br>
                                            {{$mengwi8tgl2->title_ses}}
                                        </div>
                                    </button>
                                    @endif

                                    <dialog id="mengwi8tgl2{{$mengwi8tgl2->id}}" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl text-start">
                                            <div class="flex justify-between mb-3 text-gray-700">
                                                <div class="text-start">
                                                    <h3 class="mb-0">Date: <span class="">
                                                            {{\Carbon\Carbon::parse($mengwi8tgl2->date)->format('d
                                                            F
                                                            Y')}}</span></h3>
                                                    <h3 class="mb-0">Time: <span class="">
                                                            {{$mengwi8tgl2->time}}</span></h3>
                                                </div>
                                                <div>
                                                    <p class="">Room :<span class="">
                                                            {{$mengwi8tgl2->room}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-gray-700">Session : <span class="">
                                                    {{$mengwi8tgl2->title_ses}}</span></p>
                                            <p class="text-gray-700">Moderator : <span class="">
                                                    {{$mengwi8tgl2->moderator}}
                                                </span></p>
                                            <div class="overflow-x-auto mt-5">
                                                <table class="table text-gray-700">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 18%">Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($mengwi8tgl2->schedules as $schedule)
                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-action">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                    @endforeach
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <input type="radio" name="my_tabs_2"
                class="tab uppercase tracking-wider text-[#3C194F] hover:text-[#9E1F63]"
                aria-label="3 September 2026" />
            <div class="tab-content">
                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr class=" mb-2">
                                <th>Pecatu Hall 1 & 2</th>
                                <th>Mengwi 1 & 2</th>
                                <th>Mengwi 3 & 5</th>
                                <th>Mengwi 6</th>
                                <th>Mengwi 7</th>
                                <th>Mengwi 8</th>
                                <th>Pecatu Hall 3 & 5</th>
                                <th>Legian 1</th>
                                <th>Legian 2</th>
                                <th>Legian 3</th>
                                <th>Legian 5</th>
                                <th>Legian 6</th>
                                <th>Legian 7</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td class="align-top">

                                    @foreach ($tiga as $pecatu1tgl3)
                                    @if ($pecatu1tgl3->room == 'Pecatu 1&2')
                                    <button class="hover:shadow-md hover:shadow-slate-300 block w-full my-1"
                                        onclick="pecatu1tgl3{{$pecatu1tgl3->id}}.showModal()">
                                        <div
                                            class="border border-purple-500 bg-fuchsia-50 px-0 py-4 w-full rounded-md ">
                                            <div class="badge badge-sm badge-warning mb-2">{{$pecatu1tgl3->category_sesi}}
                                            </div>
                                            <br>
                                            {{$pecatu1tgl3->time}} <br>
                                            {{$pecatu1tgl3->title_ses}}
                                        </div>
                                    </button>
                                    @endif

                                    <dialog id="pecatu1tgl3{{$pecatu1tgl3->id}}" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl text-start">
                                            <div class="flex justify-between mb-3 text-gray-700">
                                                <div class="text-start">
                                                    <h3 class="mb-0">Date: <span class="">
                                                            {{\Carbon\Carbon::parse($pecatu1tgl3->date)->format('d
                                                            F
                                                            Y')}}</span></h3>
                                                    <h3 class="mb-0">Time: <span class="">
                                                            {{$pecatu1tgl3->time}}</span></h3>
                                                </div>
                                                <div>
                                                    <p class="">Room :<span class="">
                                                            {{$pecatu1tgl3->room}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-gray-700">Session : <span class="">
                                                    {{$pecatu1tgl3->title_ses}}</span></p>
                                            <p class="text-gray-700">Moderator : <span class="">
                                                    {{$pecatu1tgl3->moderator}}
                                                </span></p>
                                            <div class="overflow-x-auto mt-5">
                                                <table class="table text-gray-700">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 18%">Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($pecatu1tgl3->schedules as $schedule)
                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-action">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                    @endforeach
                                </td>
                                <td class="align-top">

                                    @foreach ($tiga as $mengwi11tgl3)
                                    @if ($mengwi11tgl3->room == 'Mengwi 1&2')
                                    <button class="hover:shadow-md hover:shadow-slate-300 block w-full my-1"
                                        onclick="mengwi11tgl3{{$mengwi11tgl3->id}}.showModal()">
                                        <div
                                            class="border border-purple-500 bg-fuchsia-50 px-0 py-4 w-full rounded-md ">
                                            <div class="badge badge-sm badge-warning mb-2">{{$mengwi11tgl3->category_sesi}}
                                            </div>
                                            <br>
                                            {{$mengwi11tgl3->time}} <br>
                                            {{$mengwi11tgl3->title_ses}}
                                        </div>
                                    </button>
                                    @endif

                                    <dialog id="mengwi11tgl3{{$mengwi11tgl3->id}}" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl text-start">
                                            <div class="flex justify-between mb-3 text-gray-700">
                                                <div class="text-start">
                                                    <h3 class="mb-0">Date: <span class="">
                                                            {{\Carbon\Carbon::parse($mengwi11tgl3->date)->format('d
                                                            F
                                                            Y')}}</span></h3>
                                                    <h3 class="mb-0">Time: <span class="">
                                                            {{$mengwi11tgl3->time}}</span></h3>
                                                </div>
                                                <div>
                                                    <p class="">Room :<span class="">
                                                            {{$mengwi11tgl3->room}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-gray-700">Session : <span class="">
                                                    {{$mengwi11tgl3->title_ses}}</span></p>
                                            <p class="text-gray-700">Moderator : <span class="">
                                                    {{$mengwi11tgl3->moderator}}
                                                </span></p>
                                            <div class="overflow-x-auto mt-5">
                                                <table class="table text-gray-700">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 18%">Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($mengwi11tgl3->schedules as $schedule)
                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-action">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                    @endforeach
                                </td>
                                <td class="align-top">

                                    @foreach ($tiga as $mengwi3tgl3)
                                    @if ($mengwi3tgl3->room == 'Mengwi 3&5')
                                    <button class="hover:shadow-md hover:shadow-slate-300 block w-full my-1"
                                        onclick="mengwi3tgl3{{$mengwi3tgl3->id}}.showModal()">
                                        <div
                                            class="border border-purple-500 bg-fuchsia-50 px-0 py-4 w-full rounded-md ">
                                            <div class="badge badge-sm badge-warning mb-2">{{$mengwi3tgl3->category_sesi}}
                                            </div>
                                            <br>
                                            {{$mengwi3tgl3->time}} <br>
                                            {{$mengwi3tgl3->title_ses}}
                                        </div>
                                    </button>
                                    @endif

                                    <dialog id="mengwi3tgl3{{$mengwi3tgl3->id}}" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl text-start">
                                            <div class="flex justify-between mb-3 text-gray-700">
                                                <div class="text-start">
                                                    <h3 class="mb-0">Date: <span class="">
                                                            {{\Carbon\Carbon::parse($mengwi3tgl3->date)->format('d
                                                            F
                                                            Y')}}</span></h3>
                                                    <h3 class="mb-0">Time: <span class="">
                                                            {{$mengwi3tgl3->time}}</span></h3>
                                                </div>
                                                <div>
                                                    <p class="">Room :<span class="">
                                                            {{$mengwi3tgl3->room}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-gray-700">Session : <span class="">
                                                    {{$mengwi3tgl3->title_ses}}</span></p>
                                            <p class="text-gray-700">Moderator : <span class="">
                                                    {{$mengwi3tgl3->moderator}}
                                                </span></p>
                                            <div class="overflow-x-auto mt-5">
                                                <table class="table text-gray-700">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 18%">Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($mengwi3tgl3->schedules as $schedule)
                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-action">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                    @endforeach
                                </td>
                                <td class="align-top">

                                    @foreach ($tiga as $mengwi6tgl3)
                                    @if ($mengwi6tgl3->room == 'Mengwi 6')
                                    <button class="hover:shadow-md hover:shadow-slate-300 block w-full my-1"
                                        onclick="mengwi6tgl3{{$mengwi6tgl3->id}}.showModal()">
                                        <div
                                            class="border border-purple-500 bg-fuchsia-50 px-0 py-4 w-full rounded-md ">
                                            <div class="badge badge-sm badge-warning mb-2">{{$mengwi6tgl3->category_sesi}}
                                            </div>
                                            <br>
                                            {{$mengwi6tgl3->time}} <br>
                                            {{$mengwi6tgl3->title_ses}}
                                        </div>
                                    </button>
                                    @endif

                                    <dialog id="mengwi6tgl3{{$mengwi6tgl3->id}}" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl text-start">
                                            <div class="flex justify-between mb-3 text-gray-700">
                                                <div class="text-start">
                                                    <h3 class="mb-0">Date: <span class="">
                                                            {{\Carbon\Carbon::parse($mengwi6tgl3->date)->format('d
                                                            F
                                                            Y')}}</span></h3>
                                                    <h3 class="mb-0">Time: <span class="">
                                                            {{$mengwi6tgl3->time}}</span></h3>
                                                </div>
                                                <div>
                                                    <p class="">Room :<span class="">
                                                            {{$mengwi6tgl3->room}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-gray-700">Session : <span class="">
                                                    {{$mengwi6tgl3->title_ses}}</span></p>
                                            <p class="text-gray-700">Moderator : <span class="">
                                                    {{$mengwi6tgl3->moderator}}
                                                </span></p>
                                            <div class="overflow-x-auto mt-5">
                                                <table class="table text-gray-700">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 18%">Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($mengwi6tgl3->schedules as $schedule)
                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-action">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                    @endforeach
                                </td>
                                <td class="align-top">

                                    @foreach ($tiga as $mengwi7tgl3)
                                    @if ($mengwi7tgl3->room == 'Mengwi 7')
                                    <button class="hover:shadow-md hover:shadow-slate-300 block w-full my-1"
                                        onclick="mengwi7tgl3{{$mengwi7tgl3->id}}.showModal()">
                                        <div
                                            class="border border-purple-500 bg-fuchsia-50 px-0 py-4 w-full rounded-md ">
                                            <div class="badge badge-sm badge-warning mb-2">{{$mengwi7tgl3->category_sesi}}
                                            </div>
                                            <br>
                                            {{$mengwi7tgl3->time}} <br>
                                            {{$mengwi7tgl3->title_ses}}
                                        </div>
                                    </button>
                                    @endif

                                    <dialog id="mengwi7tgl3{{$mengwi7tgl3->id}}" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl text-start">
                                            <div class="flex justify-between mb-3 text-gray-700">
                                                <div class="text-start">
                                                    <h3 class="mb-0">Date: <span class="">
                                                            {{\Carbon\Carbon::parse($mengwi7tgl3->date)->format('d
                                                            F
                                                            Y')}}</span></h3>
                                                    <h3 class="mb-0">Time: <span class="">
                                                            {{$mengwi7tgl3->time}}</span></h3>
                                                </div>
                                                <div>
                                                    <p class="">Room :<span class="">
                                                            {{$mengwi7tgl3->room}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-gray-700">Session : <span class="">
                                                    {{$mengwi7tgl3->title_ses}}</span></p>
                                            <p class="text-gray-700">Moderator : <span class="">
                                                    {{$mengwi7tgl3->moderator}}
                                                </span></p>
                                            <div class="overflow-x-auto mt-5">
                                                <table class="table text-gray-700">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 18%">Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($mengwi7tgl3->schedules as $schedule)
                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-action">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                    @endforeach
                                </td>
                                <td class="align-top">

                                    @foreach ($tiga as $mengwi8tgl3)
                                    @if ($mengwi8tgl3->room == 'Mengwi 8')
                                    <button class="hover:shadow-md hover:shadow-slate-300 block w-full my-1"
                                        onclick="mengwi8tgl3{{$mengwi8tgl3->id}}.showModal()">
                                        <div
                                            class="border border-purple-500 bg-fuchsia-50 px-0 py-4 w-full rounded-md ">
                                            <div class="badge badge-sm badge-warning mb-2">{{$mengwi8tgl3->category_sesi}}
                                            </div>
                                            <br>
                                            {{$mengwi8tgl3->time}} <br>
                                            {{$mengwi8tgl3->title_ses}}
                                        </div>
                                    </button>
                                    @endif

                                    <dialog id="mengwi8tgl3{{$mengwi8tgl3->id}}" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl text-start">
                                            <div class="flex justify-between mb-3 text-gray-700">
                                                <div class="text-start">
                                                    <h3 class="mb-0">Date: <span class="">
                                                            {{\Carbon\Carbon::parse($mengwi8tgl3->date)->format('d
                                                            F
                                                            Y')}}</span></h3>
                                                    <h3 class="mb-0">Time: <span class="">
                                                            {{$mengwi8tgl3->time}}</span></h3>
                                                </div>
                                                <div>
                                                    <p class="">Room :<span class="">
                                                            {{$mengwi8tgl3->room}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-gray-700">Session : <span class="">
                                                    {{$mengwi8tgl3->title_ses}}</span></p>
                                            <p class="text-gray-700">Moderator : <span class="">
                                                    {{$mengwi8tgl3->moderator}}
                                                </span></p>
                                            <div class="overflow-x-auto mt-5">
                                                <table class="table text-gray-700">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 18%">Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($mengwi8tgl3->schedules as $schedule)
                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-action">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                    @endforeach
                                </td>
                                <td class="align-top">

                                    @foreach ($tiga as $pecatu3tgl3)
                                    @if ($pecatu3tgl3->room == 'Pecatu 3&5')
                                    <button class="hover:shadow-md hover:shadow-slate-300 block w-full my-1"
                                        onclick="pecatu3tgl3{{$pecatu3tgl3->id}}.showModal()">
                                        <div
                                            class="border border-purple-500 bg-fuchsia-50 px-0 py-4 w-full rounded-md ">
                                            <div class="badge badge-sm badge-warning mb-2">{{$pecatu3tgl3->category_sesi}}
                                            </div>
                                            <br>
                                            {{$pecatu3tgl3->time}} <br>
                                            {{$pecatu3tgl3->title_ses}}
                                        </div>
                                    </button>
                                    @endif

                                    <dialog id="pecatu3tgl3{{$pecatu3tgl3->id}}" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl text-start">
                                            <div class="flex justify-between mb-3 text-gray-700">
                                                <div class="text-start">
                                                    <h3 class="mb-0">Date: <span class="">
                                                            {{\Carbon\Carbon::parse($pecatu3tgl3->date)->format('d
                                                            F
                                                            Y')}}</span></h3>
                                                    <h3 class="mb-0">Time: <span class="">
                                                            {{$pecatu3tgl3->time}}</span></h3>
                                                </div>
                                                <div>
                                                    <p class="">Room :<span class="">
                                                            {{$pecatu3tgl3->room}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-gray-700">Session : <span class="">
                                                    {{$pecatu3tgl3->title_ses}}</span></p>
                                            <p class="text-gray-700">Moderator : <span class="">
                                                    {{$pecatu3tgl3->moderator}}
                                                </span></p>
                                            <div class="overflow-x-auto mt-5">
                                                <table class="table text-gray-700">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 18%">Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($pecatu3tgl3->schedules as $schedule)
                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-action">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                    @endforeach
                                </td>
                                <td class="align-top">

                                    @foreach ($tiga as $legian1tgl3)
                                    @if ($legian1tgl3->room == 'Legian 1')
                                    <button class="hover:shadow-md hover:shadow-slate-300 block w-full my-1"
                                        onclick="legian1tgl3{{$legian1tgl3->id}}.showModal()">
                                        <div
                                            class="border border-purple-500 bg-fuchsia-50 px-0 py-4 w-full rounded-md ">
                                            <div class="badge badge-sm badge-warning mb-2">{{$legian1tgl3->category_sesi}}
                                            </div>
                                            <br>
                                            {{$legian1tgl3->time}} <br>
                                            {{$legian1tgl3->title_ses}}
                                        </div>
                                    </button>
                                    @endif

                                    <dialog id="legian1tgl3{{$legian1tgl3->id}}" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl text-start">
                                            <div class="flex justify-between mb-3 text-gray-700">
                                                <div class="text-start">
                                                    <h3 class="mb-0">Date: <span class="">
                                                            {{\Carbon\Carbon::parse($legian1tgl3->date)->format('d
                                                            F
                                                            Y')}}</span></h3>
                                                    <h3 class="mb-0">Time: <span class="">
                                                            {{$legian1tgl3->time}}</span></h3>
                                                </div>
                                                <div>
                                                    <p class="">Room :<span class="">
                                                            {{$legian1tgl3->room}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-gray-700">Session : <span class="">
                                                    {{$legian1tgl3->title_ses}}</span></p>
                                            <p class="text-gray-700">Moderator : <span class="">
                                                    {{$legian1tgl3->moderator}}
                                                </span></p>
                                            <div class="overflow-x-auto mt-5">
                                                <table class="table text-gray-700">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 18%">Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($legian1tgl3->schedules as $schedule)
                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-action">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                    @endforeach
                                </td>
                                <td class="align-top">

                                    @foreach ($tiga as $legian2tgl3)
                                    @if ($legian2tgl3->room == 'Legian 2')
                                    <button class="hover:shadow-md hover:shadow-slate-300 block w-full my-1"
                                        onclick="legian2tgl3{{$legian2tgl3->id}}.showModal()">
                                        <div
                                            class="border border-purple-500 bg-fuchsia-50 px-0 py-4 w-full rounded-md ">
                                            <div class="badge badge-sm badge-warning mb-2">{{$legian2tgl3->category_sesi}}
                                            </div>
                                            <br>
                                            {{$legian2tgl3->time}} <br>
                                            {{$legian2tgl3->title_ses}}
                                        </div>
                                    </button>
                                    @endif

                                    <dialog id="legian2tgl3{{$legian2tgl3->id}}" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl text-start">
                                            <div class="flex justify-between mb-3 text-gray-700">
                                                <div class="text-start">
                                                    <h3 class="mb-0">Date: <span class="">
                                                            {{\Carbon\Carbon::parse($legian2tgl3->date)->format('d
                                                            F
                                                            Y')}}</span></h3>
                                                    <h3 class="mb-0">Time: <span class="">
                                                            {{$legian2tgl3->time}}</span></h3>
                                                </div>
                                                <div>
                                                    <p class="">Room :<span class="">
                                                            {{$legian2tgl3->room}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-gray-700">Session : <span class="">
                                                    {{$legian2tgl3->title_ses}}</span></p>
                                            <p class="text-gray-700">Moderator : <span class="">
                                                    {{$legian2tgl3->moderator}}
                                                </span></p>
                                            <div class="overflow-x-auto mt-5">
                                                <table class="table text-gray-700">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 18%">Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($legian2tgl3->schedules as $schedule)
                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-action">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                    @endforeach
                                </td>
                                <td class="align-top">

                                    @foreach ($tiga as $legian3tgl3)
                                    @if ($legian3tgl3->room == 'Legian 3')
                                    <button class="hover:shadow-md hover:shadow-slate-300 block w-full my-1"
                                        onclick="legian3tgl3{{$legian3tgl3->id}}.showModal()">
                                        <div
                                            class="border border-purple-500 bg-fuchsia-50 px-0 py-4 w-full rounded-md ">
                                            <div class="badge badge-sm badge-warning mb-2">{{$legian3tgl3->category_sesi}}
                                            </div>
                                            <br>
                                            {{$legian3tgl3->time}} <br>
                                            {{$legian3tgl3->title_ses}}
                                        </div>
                                    </button>
                                    @endif

                                    <dialog id="legian3tgl3{{$legian3tgl3->id}}" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl text-start">
                                            <div class="flex justify-between mb-3 text-gray-700">
                                                <div class="text-start">
                                                    <h3 class="mb-0">Date: <span class="">
                                                            {{\Carbon\Carbon::parse($legian3tgl3->date)->format('d
                                                            F
                                                            Y')}}</span></h3>
                                                    <h3 class="mb-0">Time: <span class="">
                                                            {{$legian3tgl3->time}}</span></h3>
                                                </div>
                                                <div>
                                                    <p class="">Room :<span class="">
                                                            {{$legian3tgl3->room}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-gray-700">Session : <span class="">
                                                    {{$legian3tgl3->title_ses}}</span></p>
                                            <p class="text-gray-700">Moderator : <span class="">
                                                    {{$legian3tgl3->moderator}}
                                                </span></p>
                                            <div class="overflow-x-auto mt-5">
                                                <table class="table text-gray-700">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 18%">Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($legian3tgl3->schedules as $schedule)
                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-action">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                    @endforeach
                                </td>
                                <td class="align-top">

                                    @foreach ($tiga as $legian5tgl3)
                                    @if ($legian5tgl3->room == 'Legian 5')
                                    <button class="hover:shadow-md hover:shadow-slate-300 block w-full my-1"
                                        onclick="legian5tgl3{{$legian5tgl3->id}}.showModal()">
                                        <div
                                            class="border border-purple-500 bg-fuchsia-50 px-0 py-4 w-full rounded-md ">
                                            <div class="badge badge-sm badge-warning mb-2">{{$legian5tgl3->category_sesi}}
                                            </div>
                                            <br>
                                            {{$legian5tgl3->time}} <br>
                                            {{$legian5tgl3->title_ses}}
                                        </div>
                                    </button>
                                    @endif

                                    <dialog id="legian5tgl3{{$legian5tgl3->id}}" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl text-start">
                                            <div class="flex justify-between mb-3 text-gray-700">
                                                <div class="text-start">
                                                    <h3 class="mb-0">Date: <span class="">
                                                            {{\Carbon\Carbon::parse($legian5tgl3->date)->format('d
                                                            F
                                                            Y')}}</span></h3>
                                                    <h3 class="mb-0">Time: <span class="">
                                                            {{$legian5tgl3->time}}</span></h3>
                                                </div>
                                                <div>
                                                    <p class="">Room :<span class="">
                                                            {{$legian5tgl3->room}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-gray-700">Session : <span class="">
                                                    {{$legian5tgl3->title_ses}}</span></p>
                                            <p class="text-gray-700">Moderator : <span class="">
                                                    {{$legian5tgl3->moderator}}
                                                </span></p>
                                            <div class="overflow-x-auto mt-5">
                                                <table class="table text-gray-700">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 18%">Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($legian5tgl3->schedules as $schedule)
                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-action">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                    @endforeach
                                </td>
                                <td class="align-top">

                                    @foreach ($tiga as $legian6tgl3)
                                    @if ($legian6tgl3->room == 'Legian 6')
                                    <button class="hover:shadow-md hover:shadow-slate-300 block w-full my-1"
                                        onclick="legian6tgl3{{$legian6tgl3->id}}.showModal()">
                                        <div
                                            class="border border-purple-500 bg-fuchsia-50 px-0 py-4 w-full rounded-md ">
                                            <div class="badge badge-sm badge-warning mb-2">{{$legian6tgl3->category_sesi}}
                                            </div>
                                            <br>
                                            {{$legian6tgl3->time}} <br>
                                            {{$legian6tgl3->title_ses}}
                                        </div>
                                    </button>
                                    @endif

                                    <dialog id="legian6tgl3{{$legian6tgl3->id}}" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl text-start">
                                            <div class="flex justify-between mb-3 text-gray-700">
                                                <div class="text-start">
                                                    <h3 class="mb-0">Date: <span class="">
                                                            {{\Carbon\Carbon::parse($legian6tgl3->date)->format('d
                                                            F
                                                            Y')}}</span></h3>
                                                    <h3 class="mb-0">Time: <span class="">
                                                            {{$legian6tgl3->time}}</span></h3>
                                                </div>
                                                <div>
                                                    <p class="">Room :<span class="">
                                                            {{$legian6tgl3->room}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-gray-700">Session : <span class="">
                                                    {{$legian6tgl3->title_ses}}</span></p>
                                            <p class="text-gray-700">Moderator : <span class="">
                                                    {{$legian6tgl3->moderator}}
                                                </span></p>
                                            <div class="overflow-x-auto mt-5">
                                                <table class="table text-gray-700">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 18%">Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($legian6tgl3->schedules as $schedule)
                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-action">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                    @endforeach
                                </td>
                                <td class="align-top">

                                    @foreach ($tiga as $legian7tgl3)
                                    @if ($legian7tgl3->room == 'Legian 7')
                                    <button class="hover:shadow-md hover:shadow-slate-300 block w-full my-1"
                                        onclick="legian7tgl3{{$legian7tgl3->id}}.showModal()">
                                        <div
                                            class="border border-purple-500 bg-fuchsia-50 px-0 py-4 w-full rounded-md ">
                                            <div class="badge badge-sm badge-warning mb-2">{{$legian7tgl3->category_sesi}}
                                            </div>
                                            <br>
                                            {{$legian7tgl3->time}} <br>
                                            {{$legian7tgl3->title_ses}}
                                        </div>
                                    </button>
                                    @endif

                                    <dialog id="legian7tgl3{{$legian7tgl3->id}}" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl text-start">
                                            <div class="flex justify-between mb-3 text-gray-700">
                                                <div class="text-start">
                                                    <h3 class="mb-0">Date: <span class="">
                                                            {{\Carbon\Carbon::parse($legian7tgl3->date)->format('d
                                                            F
                                                            Y')}}</span></h3>
                                                    <h3 class="mb-0">Time: <span class="">
                                                            {{$legian7tgl3->time}}</span></h3>
                                                </div>
                                                <div>
                                                    <p class="">Room :<span class="">
                                                            {{$legian7tgl3->room}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-gray-700">Session : <span class="">
                                                    {{$legian7tgl3->title_ses}}</span></p>
                                            <p class="text-gray-700">Moderator : <span class="">
                                                    {{$legian7tgl3->moderator}}
                                                </span></p>
                                            <div class="overflow-x-auto mt-5">
                                                <table class="table text-gray-700">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 18%">Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($legian7tgl3->schedules as $schedule)
                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-action">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                    @endforeach
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <input type="radio" name="my_tabs_2"
                class="tab uppercase tracking-wider text-[#3C194F] hover:text-[#9E1F63]"
                aria-label="4 September 2026" />
            <div class="tab-content ">
                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr class=" mb-2">

                                <th>Pecatu Hall 3 & 5</th>
                                <th>Mengwi 1 & 2</th>
                                <th>Mengwi 3 & 5</th>
                                <th>Mengwi 6 & 7</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td class="align-top">

                                    @foreach ($empat as $pecatu3tgl4)
                                    @if ($pecatu3tgl4->room == 'Pecatu 3&5')
                                    <button class="hover:shadow-md hover:shadow-slate-300 block w-full my-1"
                                        onclick="pecatu3tgl4{{$pecatu3tgl4->id}}.showModal()">
                                        <div
                                            class="border border-purple-500 bg-fuchsia-50 px-0 py-4 w-full rounded-md ">
                                            <div class="badge badge-sm badge-warning mb-2">{{$pecatu3tgl4->category_sesi}}
                                            </div>
                                            <br>
                                            {{$pecatu3tgl4->time}} <br>
                                            {{$pecatu3tgl4->title_ses}}
                                        </div>
                                    </button>
                                    @endif

                                    <dialog id="pecatu3tgl4{{$pecatu3tgl4->id}}" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl text-start">
                                            <div class="flex justify-between mb-3 text-gray-700">
                                                <div class="text-start">
                                                    <h3 class="mb-0">Date: <span class="">
                                                            {{\Carbon\Carbon::parse($pecatu3tgl4->date)->format('d
                                                            F
                                                            Y')}}</span></h3>
                                                    <h3 class="mb-0">Time: <span class="">
                                                            {{$pecatu3tgl4->time}}</span></h3>
                                                </div>
                                                <div>
                                                    <p class="">Room :<span class="">
                                                            {{$pecatu3tgl4->room}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-gray-700">Session : <span class="">
                                                    {{$pecatu3tgl4->title_ses}}</span></p>
                                            <p class="text-gray-700">Moderator : <span class="">
                                                    {{$pecatu3tgl4->moderator}}
                                                </span></p>
                                            <div class="overflow-x-auto mt-5">
                                                <table class="table text-gray-700">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 18%">Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($pecatu3tgl4->schedules as $schedule)
                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-action">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                    @endforeach
                                </td>
                                <td class="align-top">

                                    @foreach ($empat as $mengwi13tgl4)
                                    @if ($mengwi13tgl4->room == 'Mengwi 1&2')
                                    <button class="hover:shadow-md hover:shadow-slate-300 block w-full my-1"
                                        onclick="mengwi13tgl4{{$mengwi13tgl4->id}}.showModal()">
                                        <div
                                            class="border border-purple-500 bg-fuchsia-50 px-0 py-4 w-full rounded-md ">
                                            <div class="badge badge-sm badge-warning mb-2">{{$mengwi13tgl4->category_sesi}}
                                            </div>
                                            <br>
                                            {{$mengwi13tgl4->time}} <br>
                                            {{$mengwi13tgl4->title_ses}}
                                        </div>
                                    </button>
                                    @endif

                                    <dialog id="mengwi13tgl4{{$mengwi13tgl4->id}}" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl text-start">
                                            <div class="flex justify-between mb-3 text-gray-700">
                                                <div class="text-start">
                                                    <h3 class="mb-0">Date: <span class="">
                                                            {{\Carbon\Carbon::parse($mengwi13tgl4->date)->format('d
                                                            F
                                                            Y')}}</span></h3>
                                                    <h3 class="mb-0">Time: <span class="">
                                                            {{$mengwi13tgl4->time}}</span></h3>
                                                </div>
                                                <div>
                                                    <p class="">Room :<span class="">
                                                            {{$mengwi13tgl4->room}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-gray-700">Session : <span class="">
                                                    {{$mengwi13tgl4->title_ses}}</span></p>
                                            <p class="text-gray-700">Moderator : <span class="">
                                                    {{$mengwi13tgl4->moderator}}
                                                </span></p>
                                            <div class="overflow-x-auto mt-5">
                                                <table class="table text-gray-700">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 18%">Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($mengwi13tgl4->schedules as $schedule)
                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-action">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                    @endforeach
                                </td>
                                <td class="align-top">

                                    @foreach ($empat as $mengwi3tgl4)
                                    @if ($mengwi3tgl4->room == 'Mengwi 3&5')
                                    <button class="hover:shadow-md hover:shadow-slate-300 block w-full my-1"
                                        onclick="mengwi3tgl4{{$mengwi3tgl4->id}}.showModal()">
                                        <div
                                            class="border border-purple-500 bg-fuchsia-50 px-0 py-4 w-full rounded-md ">
                                            <div class="badge badge-sm badge-warning mb-2">{{$mengwi3tgl4->category_sesi}}
                                            </div>
                                            <br>
                                            {{$mengwi3tgl4->time}} <br>
                                            {{$mengwi3tgl4->title_ses}}
                                        </div>
                                    </button>
                                    @endif

                                    <dialog id="mengwi3tgl4{{$mengwi3tgl4->id}}" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl text-start">
                                            <div class="flex justify-between mb-3 text-gray-700">
                                                <div class="text-start">
                                                    <h3 class="mb-0">Date: <span class="">
                                                            {{\Carbon\Carbon::parse($mengwi3tgl4->date)->format('d
                                                            F
                                                            Y')}}</span></h3>
                                                    <h3 class="mb-0">Time: <span class="">
                                                            {{$mengwi3tgl4->time}}</span></h3>
                                                </div>
                                                <div>
                                                    <p class="">Room :<span class="">
                                                            {{$mengwi3tgl4->room}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-gray-700">Session : <span class="">
                                                    {{$mengwi3tgl4->title_ses}}</span></p>
                                            <p class="text-gray-700">Moderator : <span class="">
                                                    {{$mengwi3tgl4->moderator}}
                                                </span></p>
                                            <div class="overflow-x-auto mt-5">
                                                <table class="table text-gray-700">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 18%">Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($mengwi3tgl4->schedules as $schedule)
                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-action">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                    @endforeach
                                </td>
                                <td class="align-top">

                                    @foreach ($empat as $mengwi6tgl4)
                                    @if ($mengwi6tgl4->room == 'Mengwi 6&7')
                                    <button class="hover:shadow-md hover:shadow-slate-300 block w-full my-1"
                                        onclick="mengwi6tgl4{{$mengwi6tgl4->id}}.showModal()">
                                        <div
                                            class="border border-purple-500 bg-fuchsia-50 px-0 py-4 w-full rounded-md ">
                                            <div class="badge badge-sm badge-warning mb-2">{{$mengwi6tgl4->category_sesi}}
                                            </div>
                                            <br>
                                            {{$mengwi6tgl4->time}} <br>
                                            {{$mengwi6tgl4->title_ses}}
                                        </div>
                                    </button>
                                    @endif

                                    <dialog id="mengwi6tgl4{{$mengwi6tgl4->id}}" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl text-start">
                                            <div class="flex justify-between mb-3 text-gray-700">
                                                <div class="text-start">
                                                    <h3 class="mb-0">Date: <span class="">
                                                            {{\Carbon\Carbon::parse($mengwi6tgl4->date)->format('d
                                                            F
                                                            Y')}}</span></h3>
                                                    <h3 class="mb-0">Time: <span class="">
                                                            {{$mengwi6tgl4->time}}</span></h3>
                                                </div>
                                                <div>
                                                    <p class="">Room :<span class="">
                                                            {{$mengwi6tgl4->room}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-gray-700">Session : <span class="">
                                                    {{$mengwi6tgl4->title_ses}}</span></p>
                                            <p class="text-gray-700">Moderator : <span class="">
                                                    {{$mengwi6tgl4->moderator}}
                                                </span></p>
                                            <div class="overflow-x-auto mt-5">
                                                <table class="table text-gray-700">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 18%">Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($mengwi6tgl4->schedules as $schedule)
                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-action">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                    @endforeach
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <input type="radio" name="my_tabs_2"
                class="tab uppercase tracking-wider text-[#3C194F] hover:text-[#9E1F63]"
                aria-label="5 September 2026" />
            <div class="tab-content">
                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr class=" mb-2">
                                <th>Mengwi 1 & 2</th>
                                <th>Mengwi 3 & 5</th>
                                <th>Mengwi 6 & 7</th>
                                <th>Mengwi 8</th>
                                <th>DAPS CLINIC</th>
                                <th>room 1</th>
                                <th>room 2</th>
                                <th>room 3</th>
                                <th>Bali
                                    Interntaional Hospital
                                    KEK</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td class="align-top">

                                    @foreach ($lima as $mengwi1tgl5)
                                    @if ($mengwi1tgl5->room == 'Mengwi 1&2')
                                    <button class="hover:shadow-md hover:shadow-slate-300 block w-full my-1"
                                        onclick="mengwi1tgl5{{$mengwi1tgl5->id}}.showModal()">
                                        <div
                                            class="border border-purple-500 bg-fuchsia-50 px-0 py-4 w-full rounded-md ">
                                            <div class="badge badge-sm badge-warning mb-2">{{$mengwi1tgl5->category_sesi}}
                                            </div>
                                            <br>
                                            {{$mengwi1tgl5->time}} <br>
                                            {{$mengwi1tgl5->title_ses}}
                                        </div>
                                    </button>
                                    @endif

                                    <dialog id="mengwi1tgl5{{$mengwi1tgl5->id}}" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl text-start">
                                            <div class="flex justify-between mb-3 text-gray-700">
                                                <div class="text-start">
                                                    <h3 class="mb-0">Date: <span class="">
                                                            {{\Carbon\Carbon::parse($mengwi1tgl5->date)->format('d
                                                            F
                                                            Y')}}</span></h3>
                                                    <h3 class="mb-0">Time: <span class="">
                                                            {{$mengwi1tgl5->time}}</span></h3>
                                                </div>
                                                <div>
                                                    <p class="">Room :<span class="">
                                                            {{$mengwi1tgl5->room}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-gray-700">Session : <span class="">
                                                    {{$mengwi1tgl5->title_ses}}</span></p>
                                            <p class="text-gray-700">Moderator : <span class="">
                                                    {{$mengwi1tgl5->moderator}}
                                                </span></p>
                                            <div class="overflow-x-auto mt-5">
                                                <table class="table text-gray-700">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 18%">Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($mengwi1tgl5->schedules as $schedule)
                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-action">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                    @endforeach
                                </td>
                                <td class="align-top">

                                    @foreach ($lima as $mengwi3tgl5)
                                    @if ($mengwi3tgl5->room == 'Mengwi 3&5')
                                    <button class="hover:shadow-md hover:shadow-slate-300 block w-full my-1"
                                        onclick="mengwi3tgl5{{$mengwi3tgl5->id}}.showModal()">
                                        <div
                                            class="border border-purple-500 bg-fuchsia-50 px-0 py-4 w-full rounded-md ">
                                            <div class="badge badge-sm badge-warning mb-2">{{$mengwi3tgl5->category_sesi}}
                                            </div>
                                            <br>
                                            {{$mengwi3tgl5->time}} <br>
                                            {{$mengwi3tgl5->title_ses}}
                                        </div>
                                    </button>
                                    @endif

                                    <dialog id="mengwi3tgl5{{$mengwi3tgl5->id}}" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl text-start">
                                            <div class="flex justify-between mb-3 text-gray-700">
                                                <div class="text-start">
                                                    <h3 class="mb-0">Date: <span class="">
                                                            {{\Carbon\Carbon::parse($mengwi3tgl5->date)->format('d
                                                            F
                                                            Y')}}</span></h3>
                                                    <h3 class="mb-0">Time: <span class="">
                                                            {{$mengwi3tgl5->time}}</span></h3>
                                                </div>
                                                <div>
                                                    <p class="">Room :<span class="">
                                                            {{$mengwi3tgl5->room}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-gray-700">Session : <span class="">
                                                    {{$mengwi3tgl5->title_ses}}</span></p>
                                            <p class="text-gray-700">Moderator : <span class="">
                                                    {{$mengwi3tgl5->moderator}}
                                                </span></p>
                                            <div class="overflow-x-auto mt-5">
                                                <table class="table text-gray-700">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 18%">Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($mengwi3tgl5->schedules as $schedule)
                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-action">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                    @endforeach
                                </td>
                                <td class="align-top">

                                    @foreach ($lima as $mengwi6tgl5)
                                    @if ($mengwi6tgl5->room == 'Mengwi 6&7')
                                    <button class="hover:shadow-md hover:shadow-slate-300 block w-full my-1"
                                        onclick="mengwi6tgl5{{$mengwi6tgl5->id}}.showModal()">
                                        <div
                                            class="border border-purple-500 bg-fuchsia-50 px-0 py-4 w-full rounded-md ">
                                            <div class="badge badge-sm badge-warning mb-2">{{$mengwi6tgl5->category_sesi}}
                                            </div>
                                            <br>
                                            {{$mengwi6tgl5->time}} <br>
                                            {{$mengwi6tgl5->title_ses}}
                                        </div>
                                    </button>
                                    @endif

                                    <dialog id="mengwi6tgl5{{$mengwi6tgl5->id}}" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl text-start">
                                            <div class="flex justify-between mb-3 text-gray-700">
                                                <div class="text-start">
                                                    <h3 class="mb-0">Date: <span class="">
                                                            {{\Carbon\Carbon::parse($mengwi6tgl5->date)->format('d
                                                            F
                                                            Y')}}</span></h3>
                                                    <h3 class="mb-0">Time: <span class="">
                                                            {{$mengwi6tgl5->time}}</span></h3>
                                                </div>
                                                <div>
                                                    <p class="">Room :<span class="">
                                                            {{$mengwi6tgl5->room}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-gray-700">Session : <span class="">
                                                    {{$mengwi6tgl5->title_ses}}</span></p>
                                            <p class="text-gray-700">Moderator : <span class="">
                                                    {{$mengwi6tgl5->moderator}}
                                                </span></p>
                                            <div class="overflow-x-auto mt-5">
                                                <table class="table text-gray-700">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 18%">Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($mengwi6tgl5->schedules as $schedule)
                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-action">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                    @endforeach
                                </td>
                                <td class="align-top">

                                    @foreach ($lima as $mengwi8tgl5)
                                    @if ($mengwi8tgl5->room == 'Mengwi 8')
                                    <button class="hover:shadow-md hover:shadow-slate-300 block w-full my-1"
                                        onclick="mengwi8tgl5{{$mengwi8tgl5->id}}.showModal()">
                                        <div
                                            class="border border-purple-500 bg-fuchsia-50 px-0 py-4 w-full rounded-md ">
                                            <div class="badge badge-sm badge-warning mb-2">{{$mengwi8tgl5->category_sesi}}
                                            </div>
                                            <br>
                                            {{$mengwi8tgl5->time}} <br>
                                            {{$mengwi8tgl5->title_ses}}
                                        </div>
                                    </button>
                                    @endif

                                    <dialog id="mengwi8tgl5{{$mengwi8tgl5->id}}" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl text-start">
                                            <div class="flex justify-between mb-3 text-gray-700">
                                                <div class="text-start">
                                                    <h3 class="mb-0">Date: <span class="">
                                                            {{\Carbon\Carbon::parse($mengwi8tgl5->date)->format('d
                                                            F
                                                            Y')}}</span></h3>
                                                    <h3 class="mb-0">Time: <span class="">
                                                            {{$mengwi8tgl5->time}}</span></h3>
                                                </div>
                                                <div>
                                                    <p class="">Room :<span class="">
                                                            {{$mengwi8tgl5->room}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-gray-700">Session : <span class="">
                                                    {{$mengwi8tgl5->title_ses}}</span></p>
                                            <p class="text-gray-700">Moderator : <span class="">
                                                    {{$mengwi8tgl5->moderator}}
                                                </span></p>
                                            <div class="overflow-x-auto mt-5">
                                                <table class="table text-gray-700">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 18%">Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($mengwi8tgl5->schedules as $schedule)
                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-action">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                    @endforeach
                                </td>
                                <td class="align-top">

                                    @foreach ($lima as $dapstgl5)
                                    @if ($dapstgl5->room == 'DAPS CLINIC')
                                    <button class="hover:shadow-md hover:shadow-slate-300 block w-full my-1"
                                        onclick="dapstgl5{{$dapstgl5->id}}.showModal()">
                                        <div
                                            class="border border-purple-500 bg-fuchsia-50 px-0 py-4 w-full rounded-md ">
                                            <div class="badge badge-sm badge-warning mb-2">{{$dapstgl5->category_sesi}}
                                            </div>
                                            <br>
                                            {{$dapstgl5->time}} <br>
                                            {{$dapstgl5->title_ses}}
                                        </div>
                                    </button>
                                    @endif

                                    <dialog id="dapstgl5{{$dapstgl5->id}}" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl text-start">
                                            <div class="flex justify-between mb-3 text-gray-700">
                                                <div class="text-start">
                                                    <h3 class="mb-0">Date: <span class="">
                                                            {{\Carbon\Carbon::parse($dapstgl5->date)->format('d
                                                            F
                                                            Y')}}</span></h3>
                                                    <h3 class="mb-0">Time: <span class="">
                                                            {{$dapstgl5->time}}</span></h3>
                                                </div>
                                                <div>
                                                    <p class="">Room :<span class="">
                                                            {{$dapstgl5->room}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-gray-700">Session : <span class="">
                                                    {{$dapstgl5->title_ses}}</span></p>
                                            <p class="text-gray-700">Moderator : <span class="">
                                                    {{$dapstgl5->moderator}}
                                                </span></p>
                                            <div class="overflow-x-auto mt-5">
                                                <table class="table text-gray-700">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 18%">Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($dapstgl5->schedules as $schedule)
                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-action">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                    @endforeach
                                </td>
                                <td class="align-top">

                                    @foreach ($lima as $room1tgl5)
                                    @if ($room1tgl5->room == 'room 1')
                                    <button class="hover:shadow-md hover:shadow-slate-300 block w-full my-1"
                                        onclick="room1tgl5{{$room1tgl5->id}}.showModal()">
                                        <div
                                            class="border border-purple-500 bg-fuchsia-50 px-0 py-4 w-full rounded-md ">
                                            <div class="badge badge-sm badge-warning mb-2">{{$room1tgl5->category_sesi}}
                                            </div>
                                            <br>
                                            {{$room1tgl5->time}} <br>
                                            {{$room1tgl5->title_ses}}
                                        </div>
                                    </button>
                                    @endif

                                    <dialog id="room1tgl5{{$room1tgl5->id}}" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl text-start">
                                            <div class="flex justify-between mb-3 text-gray-700">
                                                <div class="text-start">
                                                    <h3 class="mb-0">Date: <span class="">
                                                            {{\Carbon\Carbon::parse($room1tgl5->date)->format('d
                                                            F
                                                            Y')}}</span></h3>
                                                    <h3 class="mb-0">Time: <span class="">
                                                            {{$room1tgl5->time}}</span></h3>
                                                </div>
                                                <div>
                                                    <p class="">Room :<span class="">
                                                            {{$room1tgl5->room}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-gray-700">Session : <span class="">
                                                    {{$room1tgl5->title_ses}}</span></p>
                                            <p class="text-gray-700">Moderator : <span class="">
                                                    {{$room1tgl5->moderator}}
                                                </span></p>
                                            <div class="overflow-x-auto mt-5">
                                                <table class="table text-gray-700">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 18%">Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($room1tgl5->schedules as $schedule)
                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-action">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                    @endforeach
                                </td>
                                <td class="align-top">

                                    @foreach ($lima as $room2tgl5)
                                    @if ($room2tgl5->room == 'room 2')
                                    <button class="hover:shadow-md hover:shadow-slate-300 block w-full my-1"
                                        onclick="room2tgl5{{$room2tgl5->id}}.showModal()">
                                        <div
                                            class="border border-purple-500 bg-fuchsia-50 px-0 py-4 w-full rounded-md ">
                                            <div class="badge badge-sm badge-warning mb-2">{{$room2tgl5->category_sesi}}
                                            </div>
                                            <br>
                                            {{$room2tgl5->time}} <br>
                                            {{$room2tgl5->title_ses}}
                                        </div>
                                    </button>
                                    @endif

                                    <dialog id="room2tgl5{{$room2tgl5->id}}" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl text-start">
                                            <div class="flex justify-between mb-3 text-gray-700">
                                                <div class="text-start">
                                                    <h3 class="mb-0">Date: <span class="">
                                                            {{\Carbon\Carbon::parse($room2tgl5->date)->format('d
                                                            F
                                                            Y')}}</span></h3>
                                                    <h3 class="mb-0">Time: <span class="">
                                                            {{$room2tgl5->time}}</span></h3>
                                                </div>
                                                <div>
                                                    <p class="">Room :<span class="">
                                                            {{$room2tgl5->room}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-gray-700">Session : <span class="">
                                                    {{$room2tgl5->title_ses}}</span></p>
                                            <p class="text-gray-700">Moderator : <span class="">
                                                    {{$room2tgl5->moderator}}
                                                </span></p>
                                            <div class="overflow-x-auto mt-5">
                                                <table class="table text-gray-700">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 18%">Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($room2tgl5->schedules as $schedule)
                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-action">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                    @endforeach
                                </td>
                                <td class="align-top">

                                    @foreach ($lima as $room3tgl5)
                                    @if ($room3tgl5->room == 'room 3')
                                    <button class="hover:shadow-md hover:shadow-slate-300 block w-full my-1"
                                        onclick="room3tgl5{{$room3tgl5->id}}.showModal()">
                                        <div
                                            class="border border-purple-500 bg-fuchsia-50 px-0 py-4 w-full rounded-md ">
                                            <div class="badge badge-sm badge-warning mb-2">{{$room3tgl5->category_sesi}}
                                            </div>
                                            <br>
                                            {{$room3tgl5->time}} <br>
                                            {{$room3tgl5->title_ses}}
                                        </div>
                                    </button>
                                    @endif

                                    <dialog id="room3tgl5{{$room3tgl5->id}}" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl text-start">
                                            <div class="flex justify-between mb-3 text-gray-700">
                                                <div class="text-start">
                                                    <h3 class="mb-0">Date: <span class="">
                                                            {{\Carbon\Carbon::parse($room3tgl5->date)->format('d
                                                            F
                                                            Y')}}</span></h3>
                                                    <h3 class="mb-0">Time: <span class="">
                                                            {{$room3tgl5->time}}</span></h3>
                                                </div>
                                                <div>
                                                    <p class="">Room :<span class="">
                                                            {{$room3tgl5->room}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-gray-700">Session : <span class="">
                                                    {{$room3tgl5->title_ses}}</span></p>
                                            <p class="text-gray-700">Moderator : <span class="">
                                                    {{$room3tgl5->moderator}}
                                                </span></p>
                                            <div class="overflow-x-auto mt-5">
                                                <table class="table text-gray-700">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 18%">Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($room3tgl5->schedules as $schedule)
                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-action">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                    @endforeach
                                </td>
                                <td class="align-top">

                                    @foreach ($lima as $bihtgl5)
                                    @if ($bihtgl5->room == 'Bali International Hospital')
                                    <button class="hover:shadow-md hover:shadow-slate-300 block w-full my-1"
                                        onclick="bihtgl5{{$bihtgl5->id}}.showModal()">
                                        <div
                                            class="border border-purple-500 bg-fuchsia-50 px-0 py-4 w-full rounded-md ">
                                            <div class="badge badge-sm badge-warning mb-2">{{$bihtgl5->category_sesi}}
                                            </div>
                                            <br>
                                            {{$bihtgl5->time}} <br>
                                            {{$bihtgl5->title_ses}}
                                        </div>
                                    </button>
                                    @endif

                                    <dialog id="bihtgl5{{$bihtgl5->id}}" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl text-start">
                                            <div class="flex justify-between mb-3 text-gray-700">
                                                <div class="text-start">
                                                    <h3 class="mb-0">Date: <span class="">
                                                            {{\Carbon\Carbon::parse($bihtgl5->date)->format('d
                                                            F
                                                            Y')}}</span></h3>
                                                    <h3 class="mb-0">Time: <span class="">
                                                            {{$bihtgl5->time}}</span></h3>
                                                </div>
                                                <div>
                                                    <p class="">Room :<span class="">
                                                            {{$bihtgl5->room}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-gray-700">Session : <span class="">
                                                    {{$bihtgl5->title_ses}}</span></p>
                                            <p class="text-gray-700">Moderator : <span class="">
                                                    {{$bihtgl5->moderator}}
                                                </span></p>
                                            <div class="overflow-x-auto mt-5">
                                                <table class="table text-gray-700">
                                                    <!-- head -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 18%">Time</th>
                                                            <th>Topic</th>
                                                            <th>Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($bihtgl5->schedules as $schedule)
                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-action">
                                                <form method="dialog">
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                    @endforeach
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="mt-10">
            <p class="text-sm text-error italic">
                Note: <br>
                The scientific schedule is provisional and may be adjusted as required.
            </p>
        </div>
    </section>
</div>