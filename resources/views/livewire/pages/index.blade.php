<div class="relative">
    <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="absolute w-full top-5 md:top-14 left-0 right-0 mx-auto z-10">
            <p class="text-center md:text-4xl text-white font-semibold animate-bounce">One Inspiring Destination. Two Distinct Congresses</p>
        </div>
        <div class="hero md:min-h-screen feature">
            <div class="hero-overlay opacity-25"></div>
            <div class="hero-content w-full">
                <a href="{{route('home-apras')}}" wire:navigate class="hover-3d my-12 mx-2 cursor-pointer w-full">
                    <!-- content -->
                    <div
                        class="card rounded-2xl w-full max-w-2xl bg-[#3C194F] bg-[radial-gradient(circle_at_bottom_left,#ffffff04_35%,transparent_36%),radial-gradient(circle_at_top_right,#ffffff04_35%,transparent_36%)] bg-size-[4.95em_4.95em]">
                        <div class="card-body">
                            <div
                                class="flex text-start mb-4 w-full items-center justify-center hover:scale-105 transition-transform duration-300">
                                <img src="../assets/images/logo/logo-apras.png" alt="Logo" class="h-full max-h-14 mr-2" />
                                <h1 class="lg:text-4xl text-2xl text-white font-semibold">The Inaugural Congress of APRAS
                                    2026</h1>
                            </div>
                            <div>
                                <h1 class="text-2xl text-white lg:text-3xl font-semibold text-center lg:text-start">
                                    (Asia Pacific Federation of Plastic Reconstructive and Aesthetic Surgery)
                                </h1>
                                <p class="text-[#F9C20A] mt-4 text-center lg:text-start">
                                    September 2 - 3, 2026
                                    <br>
                                    Bali Nusa Dua Convention Center (BNDCC), Bali, Indonesia
                                </p>
                            </div>
                            <div class="mt-10 flex justify-center gap-4 lg:justify-start">
                                {{-- <p class="text-white text-lg italic">*we are available soon</p> --}}
                                <button class="btn btn-warning text-white shadow-none rounded-lg btn-lg text-sm">Read
                                    More <i class="fa-solid fa-angles-right text-xs"></i></button>
                                <button
                                    class="btn btn-warning btn-outline shadow-none rounded-lg btn-lg text-sm hover:text-white"><i
                                        class="fa-solid fa-globe"></i> Visit Site </button>
                            </div>
                        </div>
                    </div>

                    <!-- 8 empty divs needed for the 3D effect -->
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </a>
            </div>
        </div>
        <div class="hero md:min-h-screen banner">
            <div class="hero-overlay opacity-25"></div>
            <a href="{{route('home-inapras')}}" wire:navigate class="hover-3d my-12 mx-2 cursor-pointer">
                <!-- content -->
                <div
                    class="card w-full rounded-2xl max-w-2xl bg-[#3C194F] bg-[radial-gradient(circle_at_bottom_left,#ffffff04_35%,transparent_36%),radial-gradient(circle_at_top_right,#ffffff04_35%,transparent_36%)] bg-size-[4.95em_4.95em]">
                    <div class="card-body">
                        <div
                            class="flex text-start mb-4 w-full items-center justify-center hover:scale-105 transition-transform duration-300">
                            <img src="../assets/images/logo/logo.png" alt="Logo" class="h-full max-h-14 mr-2" />
                            <h1 class="lg:text-4xl text-2xl text-white font-semibold">InaPRAS 2026</h1>
                        </div>
                        <div>
                            <h1 class="text-2xl text-white lg:text-3xl font-semibold text-center lg:text-start">
                                29<sup>th</sup> Annual Scientific Meeting Indonesian Association of Plastic Reconstructive and
                                Aesthetic Surgeons (InaPRAS) 2026
                            </h1>
                            <p class="text-[#F9C20A] mt-4 text-center lg:text-start">
                                September 3 - 5, 2026
                                <br>
                                Bali Nusa Dua Convention Center (BNDCC), Bali, Indonesia
                            </p>
                        </div>
                        <div class="mt-10 flex justify-center gap-4 lg:justify-start">
                            <button class="btn btn-warning text-white shadow-none rounded-lg btn-lg text-sm">Read
                                More <i class="fa-solid fa-angles-right text-xs"></i></button>
                            <button
                                class="btn btn-warning btn-outline shadow-none rounded-lg btn-lg text-sm hover:text-white"><i
                                    class="fa-solid fa-globe"></i> Visit Site </button>
                        </div>
                    </div>
                </div>

                <!-- 8 empty divs needed for the 3D effect -->
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </a>
        </div>
    </div>
</div>