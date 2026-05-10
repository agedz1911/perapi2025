<div class="">
    <section class=" relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-l from-[#3C194F] via-[#3C194F] to-[#A93E89]"></div>
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
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-5">
                    @foreach ($indofaculties as $indo)
                    <div class="card bg-base-100 shadow-sm ">
                        <figure class="hover:cursor-pointer" onclick="my_modal_{{$loop->index}}.showModal()">
                            <img src="{{$indo->image ? asset('storage/' . $indo->image) : 
                                asset('assets/images/speaker.png')}}" alt="{{$indo->name}}"
                                class="w-full h-full max-h-96 object-cover rounded">

                        </figure>
                        <div class="card-body pt-2">
                            <h2 class="text-xl text-center font-semibold text-amber-500">
                                {{$indo->name}}
                            </h2>
                            <p class="text-center">{{$indo->description}}</p>
                            <div class="text-end">
                                <button onclick="my_modal_{{$loop->index}}.showModal()" class="btn btn-sm btn-warning">
                                    <i class=""></i> Schedule Details
                                </button>
                                @if ($indo->submit_abstracts()->count() > 0)

                                @else
                                <button onclick="submit_{{$indo->id}}.showModal()" class="btn btn-sm">Submit
                                    Abstract</button>
                                @endif

                            </div>
                        </div>
                    </div>

                    <dialog id="submit_{{$indo->id}}" class="modal">
                        <div class="modal-box w-10/12 max-w-4xl">
                            @livewire('section.submit-abstract', ['facultyId' => $indo->id])
                        </div>
                    </dialog>


                    <dialog id="my_modal_{{$loop->index}}" class="modal">
                        <div class="modal-box w-10/12 max-w-5xl">
                            <form method="dialog">
                                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                            </form>
                            <div class="flex items-center gap-3 pb-3">
                                <img class="rounded-full bg-indigo-700/20 shadow w-20 object-cover"
                                    src="{{$indo->image ? asset('storage/' . $indo->image) : asset('assets/images/speaker.png')}}"
                                    alt="{{$indo->name}}">
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
                    {{-- {{ $indofaculties->links() }} --}}
                </div>
                <p class="text-gray-500 italic text-xs">*within confirmation</p>
            </div>
        </div>
    </section>
    <!-- Flash message untuk feedback -->
    @if(session()->has('message'))
    <div class="toast toast-end toast-middle z-50">
        <div class="alert alert-success">
            <span>{{ session('message') }}</span>
        </div>
    </div>
    <script>
        // Auto hide flash message setelah 3 detik
        setTimeout(() => {
            const toast = document.querySelector('.toast');
            if (toast) {
                toast.remove();
            }
        }, 3000);
    </script>
    @endif
</div>