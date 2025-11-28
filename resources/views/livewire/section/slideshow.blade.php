<div>
    <div class="hero bg-transparent min-h-screen ">
        <div class="hero-content flex-col lg:flex-row w-full justify-around">
            <div class="px-1 order-2 lg:order-2">
                <!-- <img src="assets/images/banner.png" class="w-full max-w-lg shadow-md" /> -->
                <livewire:section.flyer />
            </div>
            <div class="px-1 order-1 lg:order-1 w-full max-w-xl">
                <div class="carousel w-full" x-data="{ 
                    currentSlide: 0, 
                    totalSlides: {{ count($heros) }},
                    interval: null 
                }" x-init="interval = setInterval(() => { 
                    currentSlide = (currentSlide + 1) % totalSlides;
                }, 10000)" @mouseenter="clearInterval(interval)" @mouseleave="interval = setInterval(() => { 
                    currentSlide = (currentSlide + 1) % totalSlides;
                }, 10000)">
                    <div class="flex transition-transform duration-500 ease-in-out h-full"
                        :style="'transform: translateX(-' + (currentSlide * 100) + '%)'">
                        @foreach ($heros as $index => $hero)
                        <div id="slide{{ $index + 1 }}"
                            class="carousel-item w-full ">
                            <div>
                                <div class="flex text-start mb-4 w-full items-center lg:justify-start justify-center">
                                    <img src="{{asset('storage/' . $hero->logo)}}" alt="Logo" class="h-full max-h-16 mr-2" />
                                    <h1 class="lg:text-4xl text-2xl text-white font-semibold">{{$hero->title}}</h1>
                                </div>
                                <h1 class="text-2xl lg:text-3xl text-white text-center lg:text-start">{{$hero->subtitle}}
                                </h1>
                                <p class="text-[#F9C20A] mt-4 text-center lg:text-start">
                                    {{$hero->date_event}} <br> {{$hero->venue}}
                                </p>

                            </div>

                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="mt-10 flex justify-center gap-4 lg:justify-start">
                    <button
                        class="btn btn-warning text-white shadow-none rounded-lg btn-lg text-sm">Read
                        More <i class="fa-solid fa-angles-right text-xs"></i></button>
                    <a href="/registration" wire:navigate
                        class="btn btn-warning btn-outline shadow-none rounded-lg btn-lg text-sm hover:text-white"><i
                            class="fa-solid fa-pen-to-square"></i> Regiter Now </a>
                </div>
            </div>
        </div>
    </div>
</div>