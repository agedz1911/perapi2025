<div class="relative">
    <section class="lg:min-h-screen banner relative pb-16 lg:pb-28">
        <div class="absolute inset-0 bg-gradient-to-b from-[#7F3F80]/30 to-[#3C194F]/90"></div>
        <livewire:section.slideshow />
        <div
            class="absolute wave block md:hidden lg:block overflow-hidden w-full z-0 left-0 leading-none bottom-[-1px]">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"
                class="block position-relative">
                <path class="fill-[#fef7ff] translate-middle-y" d="M790.5,93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3
          c-10.2,1.1-22.6,1.4-50.1,7.4c-27.2,6.3-58.2,16.6-79.4,24.7c-41.3,15.9-94.9,21.9-134,22.6C72,58.2,0,25.8,0,25.8V100h1000V65.3
          c0,0-51.5,19.4-106.2,25.7C839.5,97,814.1,95.2,790.5,93.1z"></path>
            </svg>
        </div>
    </section>

    <section class="px-2 lg:px-7 pb-24 bg-competition">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="w-full px-2">
                <div class="text-center pb-6">
                    <h2 class="mb-1 text-4xl font-semibold text-[#7F3F80] uppercase tracking-wide">Important <span
                            class="text-[#F9C20A]">Dates</span></h2>
                </div>
                <div class="w-full pt-5">
                    <livewire:section.important-date />
                </div>
            </div>
            <div class="w-full px-3">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 align-items-center">
                    <div class="flex flex-col gap-4">
                        <div class="rounded-xl bg-white shadow-lg">
                            <img src="assets/images/bali/5.jpg" class="w-full rounded-xl sepia-50" alt="bali 1">
                        </div>
                        <div class="rounded-xl bg-white shadow-lg">
                            <img src="assets/images/bali/6.jpg" class="w-full rounded-xl" alt="bali 2">
                        </div>
                    </div>
                    <div class="rounded-xl bg-white shadow-lg">
                        <img src="assets/images/bali/4.jpg" class="w-full rounded-xl object-cover h-full sepia-50" alt="bali 3">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-white feature relative z-0 start-0 py-28">
        <div class="absolute inset-0 bg-gradient-to-b from-[#7D3E7E]/50 to-[#3C194F]/50"></div>
        <div class="relative">
            <div class="w-full max-w-6xl mx-auto border-b border-white border-opacity-35">
                <div class="mb-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="w-full border-e border-opacity-35 border-white ">
                            <div class="border-b border-opacity-25 border-white md:border-b-0 text-center py-5 px-2">
                                <h1 class="text-[#F9C20A] m-0 text-4xl md:text-5xl font-semibold"><span class="num"
                                        data-val="100"></span><span>+</span>
                                </h1>
                                <p class="text-xs">Speakers</p>
                            </div>
                        </div>
                        <div class="w-full border-e border-opacity-35 border-white">
                            <div class="border-b border-opacity-25 border-white md:border-b-0 text-center py-5 px-2">
                                <h1 class="text-[#F9C20A] m-0 text-4xl md:text-5xl font-semibold"><span class="num"
                                        data-val="50"></span><span>+</span>
                                </h1>
                                <p class="text-xs">Symposium</p>
                            </div>
                        </div>
                        <div class="w-full border-e border-opacity-35 border-white">
                            <div class="border-b border-opacity-25 border-white md:border-b-0 text-center py-5 px-2">
                                <h1 class="text-[#F9C20A] m-0 text-4xl md:text-5xl font-semibold"><span class="num"
                                        data-val="20"></span><span>+</span>
                                </h1>
                                <p class="text-xs">Workshops, Master Classes <br> & Master Courses</p>
                            </div>
                        </div>
                        <div class="w-full border-e border-opacity-35 border-white">
                            <div class="border-b border-opacity-25 border-white md:border-b-0 text-center py-5 px-2">
                                <h1 class="text-[#F9C20A] m-0 text-4xl md:text-5xl font-semibold"><span class="num"
                                        data-val="30"></span><span>+</span>
                                </h1>
                                <p class="text-xs">Topics</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-10 mb-6 px-4">
                <h2 class="text-4xl text-center mb-5 text-white font-semibold uppercase">Welcome <span
                        class="text-[#F9C20A]">message
                    </span></h2>
                @foreach ($welcomeMessages as $welcomeMessage)
                @if ($loop->even)
                <div class="card shadow-lg bg-transparent border border-white border-opacity-25 w-full mb-5">
                    <div class="card-body">
                        <div class="grid grid-cols-1 lg:grid-cols-2 justify-items-stretch">
                            <div class="order-2 lg:order-1 p-2">
                                <div
                                    class="w-full justify-center lg:flex-row flex flex-col items-center lg:items-end gap-2">
                                    <div class="avatar">
                                        <img src="{{$welcomeMessage->image ? asset('storage/' . $welcomeMessage->image) : "
                                            assets/images/speaker.png"}}" alt="{{$welcomeMessage->name}}"
                                            class="w-full max-w-52 shadow-lg rounded-lg ">
                                    </div>
                                    <div class="p-4 rounded-lg bg-[#F9C20A] w-full max-w-sm">
                                        <div class="ps-4 border-s border-black border-spacing-7">
                                            <p class="text-black text-xs italic">" {{$welcomeMessage->title}}
                                                "</p>
                                            <h6 class="font-semibold text-black">{{$welcomeMessage->name}}</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="order-1 lg:order-2 p-2 ">
                                <div class="flex flex-col ">
                                    <div class="pr-2">
                                        <div class="pb-4  text-justify flex flex-col gap-2 text-gray-300">
                                            <div class="line-clamp-6">
                                                {!! str($welcomeMessage->description)->markdown()->sanitizeHtml() !!}
                                            </div>
                                            <a class="hover:underline hover:text-primary" href="/welcome-messages" wire:navigate>Read More...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="card shadow-lg bg-transparent border border-white border-opacity-25 w-full mb-5">
                    <div class="card-body">
                        <div class="grid grid-cols-1 lg:grid-cols-2 justify-items-stretch">
                            <div class="order-2 lg:order-2 p-2">
                                <div
                                    class="w-full justify-center lg:flex-row flex flex-col items-center lg:items-end gap-2">
                                    <div class="avatar">
                                        <img src="{{$welcomeMessage->image ? asset('storage/' . $welcomeMessage->image) : "
                                            assets/images/speaker.png"}}" alt="{{$welcomeMessage->name}}"
                                            class="w-full max-w-52 shadow-lg rounded-lg ">
                                    </div>
                                    <div class="p-4 rounded-lg bg-[#F9C20A] w-full max-w-sm">
                                        <div class="ps-4 border-s border-black   border-spacing-7">
                                            <p class="text-black text-xs italic">" {{$welcomeMessage->title}}
                                                "</p>
                                            <h6 class="font-semibold text-black">{{$welcomeMessage->name}}</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="order-1 lg:order-1 p-2 ">
                                <div class="flex flex-col ">
                                    <div class="pr-2">
                                        <div class="pb-4  text-justify flex flex-col gap-2 text-gray-300">
                                            <div class="line-clamp-6">
                                                {!! str($welcomeMessage->description)->markdown()->sanitizeHtml() !!}
                                            </div>
                                            <a class="hover:underline hover:text-warning" href="/welcome-messages" wire:navigate>Read More...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            {{-- <div class="flex justify-center">
                <a href="/welcome-messages" wire:navigate class="btn btn-primary rounded-lg">Read All Welcome Message <i class="fa fa-angles-right"></i></a>
            </div> --}}
        </div>
    </section>

    <section class="w-full pt-24 pb-3 px-2 lg:px-4">
        <div class="text-center mb-5 pb-10">
            <p class="mb-1 font-semibold">Venue</p>
            <h2 class=" text-4xl font-semibold uppercase mb-1">GET DIRECTION TO THE <span
                    class="text-[#7F3F80]">Venue</span></h2>
        </div>
        <div class="">
            <div class="flex flex-col lg:flex-row gap-5">
                <div class="lg:w-1/3 w-full">
                    <div
                        class="py-10 px-4 text-white rounded-lg shadow-md bg-gradient-to-bl from-[#7F3F80] to-[#3C194F]">
                        <div class="">
                            <h5 class="text-[#F9C20A] pb-2 tracking-wide font-semibold">EVENT VENUE:</h5>
                            <p class="pb-5 m-0 text-sm">Bali Nusa Dua Convention Center (BNDCC)</p>
                            <h5 class="text-[#F9C20A] pb-2 tracking-wide font-semibold">ADDRESS:</h5>
                            <p class="pb-5 m-0 text-sm">
                                Nusa Dua Tourism Area Lot NW/1, Benoa, South Kuta District, Badung Regency, Bali,
                                Indonesia </p>
                            <!-- <h5 class="text-white pb-2">RECEPTION INFO:</h5>
                                    <p class="pb-5 m-0">Booking: (+62) 1919-2020</p> -->
                            <a class="hover:text-green-400">Get Directions</a>
                        </div>
                    </div>
                </div>
                <div class="lg:w-2/3 w-full px-1">
                    <iframe class="rounded-lg w-full h-full"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.4463375527068!2d115.22347109839474!3d-8.796152999999991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2432481681435%3A0x28d2de6bdbd07735!2sBali%20Nusa%20Dua%20Convention%20Center!5e0!3m2!1sid!2sid!4v1759245311923!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 mt-5 justify-items-center">

                <div class="w-full max-w-sm">
                    <a><img src="assets/images/bali/1.jpg" class="w-full rounded-xl shadow-md" alt="bndcc bali "></a>
                </div>
                <div class="w-full max-w-sm">
                    <a><img src="assets/images/bali/2.jpg" class="w-full rounded-xl shadow-md" alt="bndcc bali "></a>
                </div>
                <div class="w-full max-w-sm">
                    <a><img src="assets/images/bali/3.jpg" class="w-full rounded-xl shadow-md" alt="bndcc bali "></a>
                </div>
            </div>
        </div>
    </section>
</div>