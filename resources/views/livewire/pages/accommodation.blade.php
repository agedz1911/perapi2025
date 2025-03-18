<div class="w-full lg:w-11/12">
    <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-b from-[#470858]/80 to-[#9E1F63]/30"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-white uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Accommodation</h2>
        </div>
    </section>

    <section class="pt-10 pb-24 px-2 lg:px-5">
        <div class="text-center md:text-start mb-5">
            <h2 class="mb-3 uppercase text-4xl tracking-wide font-bold">Hotel <span class="text-amber-500">Reservation</span></h2>
            <p class="text-gray-500">The organizers of the InaPRAS congress have secured competitive rates at a variety of
                hotels near the JW Marriot Hotel to accommodate delegates
                with different budgets and preferences. Hotel reservations will open and are subject
                to availability. It is advisable to book your preferred hotel as soon as possible
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 text-center">
            @foreach ($accommodations as $accommodation)
            <div class="w-full bg-white rounded-xl shadow-md pb-10">
                <div class="">
                    <div class="mb-3 relative p-3">
                        {{-- menampilkan string HTML --}}
                        {!! $accommodation->tag ? '<span
                            class="absolute top-1 right-4 translate-y-5 bg-indigo-700 rounded-xl text-white px-3 py-1">
                            <p class="text-xs">' . $accommodation->tag . '</p>
                        </span>' : " " !!}
                        <a href="javascript:void(0)"><img
                                src="{{ asset('storage/' . $accommodation->image) }}"
                                alt="{{$accommodation->hotel_name}}" class="w-full object-cover rounded-xl"></a>
                    </div>
                    <div class="mb-3">
                        <h6 class="pb-2 mb-3 text-xl font-semibold">{{$accommodation->hotel_name}}</h6>
                        <div class="flex justify-center mb-3">
                            @for ($i = 1; $i <= 5; $i++) @if ($i <=$accommodation->hotel_star)
                                <i class="fa-solid fa-star text-amber-500"></i>
                                @else
                                <i class="fa-solid fa-star"></i>
                                @endif
                                @endfor
                        </div>
                        <p class="mt-2 mb-5 text-xs"><i
                                class="fa-solid text-green-600/70 fa-circle-info"></i>
                            {{$accommodation->distance}}
                        </p>
                        <p class="text-sm"> Estimated Cost/Night</p>
                        <div class="text-sm mb-6 flex justify-center gap-3">
                            <p class="text-green-500 font-semibold mb-0"><span
                                    class="fw-normal">IDR</span>
                                {{number_format($accommodation->idr_price, 0, ',', '.')}}
                            </p>
                            <p class="text-green-500 font-semibold"><span
                                    class="fw-normal">USD</span>
                                {{$accommodation->usd_price}}
                            </p>
                        </div>
                    </div>
                    <div class="flex justify-evenly">
                        <a href="{{$accommodation->url ? $accommodation->url : 'javascript:void(0)'}}"
                            class="bg-purple-700 py-3 rounded-2xl font-semibold text-white hover:bg-amber-500 ease-out duration-100 px-6">Book Now</a>
                        <a href="{{$accommodation->direction ? $accommodation->direction : 'javascript:void(0)'}}"
                            class="bg-transparent py-3 rounded-2xl font-semibold text-purple-900 hover:bg-amber-500 ease-out duration-100 hover:text-white px-6"><i class="fa-solid fa-location-dot mx-1"></i>Direction</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <x-section.footer />
</div>