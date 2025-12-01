<div>
    @if ($hasActiveFlyers)
    <div class="carousel w-full shadow-md rounded-2xl" x-data="{ 
         currentSlide: 0, 
         totalSlides: {{ count($flyers) }},
         interval: null 
     }" x-init="interval = setInterval(() => { 
         currentSlide = (currentSlide + 1) % totalSlides;
     }, 3000)" @mouseenter="clearInterval(interval)" @mouseleave="interval = setInterval(() => { 
         currentSlide = (currentSlide + 1) % totalSlides;
     }, 3000)">
        <div class="flex transition-transform duration-500 ease-in-out h-full"
            :style="'transform: translateX(-' + (currentSlide * 100) + '%)'">
            @foreach ($flyers as $index => $flyer)
            <div id="slide{{ $index + 1 }}"
                class="carousel-item relative w-full ease-in-out duration-300 h-full object-cover">
                @foreach ($flyer->flyer as $image)
                <figure>
                    <img src="{{ asset('storage/' . $image)}}" alt=""
                        class="h-full object-cover max-w-full rounded-2xl" />
                </figure>
                @endforeach
                <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                    <button
                        @click="clearInterval(interval); currentSlide = currentSlide === 0 ? totalSlides - 1 : currentSlide - 1; setTimeout(() => interval = setInterval(() => { currentSlide = (currentSlide + 1) % totalSlides; }, 3000), 3000)"
                        class="btn btn-circle btn-xs btn-outline">❮</button>
                    <button
                        @click="clearInterval(interval); currentSlide = (currentSlide + 1) % totalSlides; setTimeout(() => interval = setInterval(() => { currentSlide = (currentSlide + 1) % totalSlides; }, 3000), 3000)"
                        class="btn btn-circle btn-xs btn-outline">❯</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @else
    <img src="../assets/images/banner.png" class="w-full max-w-lg" />
    @endif
</div>