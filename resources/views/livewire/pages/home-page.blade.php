<div class="relative">
    <section class="lg:min-h-screen banner relative pb-16 lg:pb-28">
        <div class="absolute inset-0 bg-gradient-to-b from-[#7F3F80]/10 to-[#3C194F]/90"></div>
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

    <section
        class="lg:pb-28 pb-20 pt-0 lg:-mt-14 flex flex-col lg:flex-row px-3 gap-3 border-b-2 border-dashed border-gray-400">
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 relative">
            <div class="grid gap-4">
                <div class="bg-gray-200 rounded-lg place-items-center place-content-start">
                    <img src="assets/images/logo/logo.png" class="max-w-full h-auto" alt="">
                    <img src="assets/images/logo/logo-event.png" class="max-w-full h-auto" alt="">
                </div>
                {{-- <div class="bg-gray-200 rounded-lg place-items-center place-content-start">
                    <img src="assets/images/logo/logo-event.png" class="max-w-full h-auto" alt="">
                </div> --}}
            </div>
            <div class="grid gap-4 content-center">
                <livewire:section.flyer />
            </div>
        </div>
    </section>

    <section class="py-28 px-2 lg:px-7 flex flex-wrap justify-between">
        <div class="w-full max-w-xl">
            <div class="text-center pb-6">
                <p class="mb-1 font-semibold tracking-wide">28<sup>th</sup> InaPRAS</p>
                <h2 class="mb-1 text-4xl font-semibold uppercase tracking-wide">important <span
                        class="text-amber-500 ">Dates</span></h2>
            </div>
            <div class="w-full pt-5">
                <livewire:section.important-date />
            </div>
        </div>
        <div class="w-full max-w-md">
            <div class="mockup-window bg-[#92278F] border border-base-100 shadow-md">
                <video class="rounded-lg" controls>
                    <source src="download/teaser.mp4" type="video/mp4">
                    <source src="download/teaser.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>

    </section>

    <section class="text-white feature relative z-0 start-0 py-28">
        <div class="absolute inset-0 bg-gradient-to-b from-[#9E1F63]/80 to-[#470858]"></div>
        <div class="relative">
            <div class="w-full max-w-6xl mx-auto border-b border-white border-opacity-35">
                <div class="mb-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="w-full border-e border-opacity-35 border-white ">
                            <div class="border-b border-opacity-25 border-white md:border-b-0 text-center py-5 px-2">
                                <h1 class="text-amber-400 m-0 text-4xl md:text-5xl font-semibold"><span class="num"
                                        data-val="100"></span><span>+</span>
                                </h1>
                                <p class="text-xs">Speakers</p>
                            </div>
                        </div>
                        <div class="w-full border-e border-opacity-35 border-white">
                            <div class="border-b border-opacity-25 border-white md:border-b-0 text-center py-5 px-2">
                                <h1 class="text-amber-400 m-0 text-4xl md:text-5xl font-semibold"><span class="num"
                                        data-val="50"></span><span>+</span>
                                </h1>
                                <p class="text-xs">Symposium</p>
                            </div>
                        </div>
                        <div class="w-full border-e border-opacity-35 border-white">
                            <div class="border-b border-opacity-25 border-white md:border-b-0 text-center py-5 px-2">
                                <h1 class="text-amber-400 m-0 text-4xl md:text-5xl font-semibold"><span class="num"
                                        data-val="20"></span><span>+</span>
                                </h1>
                                <p class="text-xs">Workshops, Master Classes <br> & Master Courses</p>
                            </div>
                        </div>
                        <div class="w-full border-e border-opacity-35 border-white">
                            <div class="border-b border-opacity-25 border-white md:border-b-0 text-center py-5 px-2">
                                <h1 class="text-amber-400 m-0 text-4xl md:text-5xl font-semibold"><span class="num"
                                        data-val="30"></span><span>+</span>
                                </h1>
                                <p class="text-xs">Topics</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-10 mb-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                    <div class="order-2 lg:order-1 p-2">
                        <div class="grid grid-cols-1 place-items-center gap-5">
                            <div class="lg:w-2/3 w-full max-w-sm flex flex-col items-center">
                                <div class="image-welcome">
                                    <img src="assets/images/defry.png" alt="faq-general-image" class="w-60">
                                </div>
                                <div class="p-4 rounded-lg bg-amber-500 w-full">
                                    <div class="ps-4 border-s border-white border-spacing-7">
                                        <p class="text-gray-200 text-xs italic">" Congress Chairman of 28th InaPRAS 2025
                                            "</p>
                                        <h6 class="font-semibold">Defry Rivandra Utama</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:w-2/3 w-full max-w-sm flex flex-col items-center">
                                <div class="image-welcome">
                                    <img src="assets/images/najat.png" alt="faq-general-image" class="w-60">
                                </div>
                                <div class="p-4 rounded-lg bg-amber-500 w-full">
                                    <div class="ps-4 border-s border-white border-spacing-7">
                                        <p class="text-gray-200 text-xs italic">" President of InaPRAS "</p>
                                        <h6 class="font-semibold">Najatullah</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order-1 lg:order-2 p-2">
                        @foreach ($welcomeMessages as $welcomeMessage)
                        <div class="pr-2">
                            <div class="pb-4 text-justify flex flex-col gap-2 text-gray-300">
                                <h2 class="text-4xl font-semibold text-white uppercase">Welcome <span
                                        class="text-amber-500">message </span></h2>
                                {!! str($welcomeMessage->description)->markdown()->sanitizeHtml() !!}

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 border-t pt-5">
                    <div class="order-2 p-2">
                        <div class="grid grid-cols-1 place-items-center gap-5">
                            <div class="lg:w-2/3 w-full max-w-sm flex flex-col items-center">
                                <div class="image-welcome">
                                    <img src="assets/images/p-teddy-ohp.png" alt="faq-general-image" class="w-60">
                                </div>
                                <div class="p-4 rounded-lg bg-amber-500 w-full">
                                    <div class="ps-4 border-s border-white border-spacing-7">
                                        <p class="text-gray-200 text-xs italic">" Patron - Scientific Committee Chair
                                            "</p>
                                        <h6 class="font-semibold">Theddeus O.H. Prasetyono, M.D., PhD., FICS</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order-1 p-2">
                        <div class="px-2 lg:pl-8">
                            <div class="pb-4 text-justify flex flex-col gap-2 text-gray-300">

                                <p>Dear Esteemed Colleagues and Distinguished Guests,</p>
                                <p>
                                    With heartfelt enthusiasm, we extend our warmest welcome to you on behalf of the
                                    28th Annual Scientific Meeting of the Indonesian Association of Plastic
                                    Reconstructive and Aesthetic Surgeons (InaPRAS).</p>
                                <p>Through collaboration, groundbreaking innovation, and advancements in medical
                                    technology, we have the power to push the boundaries of plastic surgery and
                                    transform the lives of countless patients. We are honored to bring together leading
                                    experts, dedicated clinicians, and visionary researchers in the vibrant city of
                                    Medan, Indonesia, from July 30th to August 2nd, 2025, at the JW Marriott Hotel
                                    Medan, North Sumatra.</p>
                                <p>InaPRAS has evolved into a premier platform for the exchange of pioneering scientific
                                    discoveries and the introduction of cutting-edge innovations in plastic surgery</p>
                                <p>Our dedicated organizing committee is diligently curating a high-quality scientific
                                    program, themed Aesthetics and Beyond. Quality programs will include Tea Time Talks,
                                    Aesthetic Track, General Track, and Nusantara Track. What unique in our program is
                                    the wide variety of plastic surgery disciplines which will be contained in the form
                                    of Live Surgery, Anatomical Dissection, various Master Courses, Instructional
                                    Courses, and Master Classes. We also invite all delegates to submit their scientific
                                    works for the Oral Free Paper, E-Poster, and Research Proposal Competitions. Those
                                    sessions will be also complemented by memorable social activities to ensure a truly
                                    enriching and unforgettable conference experience.</p>
                                <p>Together, we will shape the future of plastic surgery and make a lasting impact on
                                    the lives of many. As a united community, let us forge new paths, spark innovation,
                                    and redefine the future of patient care in plastic surgery.</p>
                                <p>Medan is easily accessible via direct flights from major cities across Asia and
                                    offers both visa-free and visa-on-arrival options for your convenience.</p>
                                <p>Join us in this inspiring journey to lead and innovate</p>
                                <p>Warm regards,</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <livewire:section.competition />

    <section class="w-full pt-24 pb-3 px-2 lg:px-4">
        <div class="text-center mb-5 pb-10">
            <p class="mb-1 font-semibold tracking-wide">Venue</p>
            <h2 class=" text-4xl font-semibold uppercase tracking-wide mb-1">GET DIRECTION TO THE <span
                    class="text-amber-500">Venue</span></h2>
        </div>
        <div class="">
            <div class="flex flex-col lg:flex-row gap-5">
                <div class="lg:w-1/3 w-full">
                    <div
                        class="py-10 px-4 text-white rounded-lg shadow-md bg-gradient-to-tr from-indigo-900 to-purple-900">
                        <div class="">
                            <h5 class="text-amber-400 pb-2 tracking-wide font-semibold">EVENT VENUE:</h5>
                            <p class="pb-5 m-0 text-sm">JW Marriott Hotel Medan</p>
                            <h5 class="text-amber-400 pb-2 tracking-wide font-semibold">ADDRESS:</h5>
                            <p class="pb-5 m-0 text-sm">Putri Hijau No.10, Kesawan, Kec. Medan Baru,

                                Medan City, North Sumatra</p>
                            <a class="hover:text-amber-400">Get Directions</a>
                        </div>
                    </div>
                </div>
                <div class="lg:w-2/3 w-full px-1">
                    <iframe class="rounded-lg w-full h-full"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.960159465498!2d98.67325207477667!3d3.596605750239572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131c3f6c8d037%3A0x54771c0e776d21fe!2sJW%20Marriott%20Hotel%20Medan!5e0!3m2!1sid!2sid!4v1741591719972!5m2!1sid!2sid"></iframe>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row gap-5 mt-3">
                <div class="lg:w-2/3 w-full px-1">
                    <iframe class="rounded-lg w-full h-full"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.089071882656!2d98.65698617477668!3d3.566973150442587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312fd8fc9af15d%3A0x3712a827aaac1148!2sFakultas%20Kedokteran%20-%20Universitas%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1746521738922!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
                <div class="lg:w-1/3 w-full">
                    <div
                        class="py-10 px-4 text-white rounded-lg shadow-md bg-gradient-to-tr from-indigo-900 to-purple-900">
                        <div class="">
                            <h5 class="text-amber-400 pb-2 tracking-wide font-semibold">EVENT VENUE:</h5>
                            <p class="pb-5 m-0 text-sm">Faculty of Medicine,North Sumatra University</p>
                            <h5 class="text-amber-400 pb-2 tracking-wide font-semibold">ADDRESS:</h5>
                            <p class="pb-5 m-0 text-sm">Jl. Dr. Mansyur No.5, Padang Bulan, Kec. Medan Baru,

                                Medan City, North Sumatra</p>
                            <a class="hover:text-amber-400">Get Directions</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row gap-5 mt-3">
                <div class="lg:w-1/3 w-full">
                    <div
                        class="py-10 px-4 text-white rounded-lg shadow-md bg-gradient-to-tr from-indigo-900 to-purple-900">
                        <div class="">
                            <h5 class="text-amber-400 pb-2 tracking-wide font-semibold">EVENT VENUE:</h5>
                            <p class="pb-5 m-0 text-sm">Setiabudi Hospital Medan</p>
                            <h5 class="text-amber-400 pb-2 tracking-wide font-semibold">ADDRESS:</h5>
                            <p class="pb-5 m-0 text-sm">Jl.Mesjid No.3, Tj. Rejo, Kec. Medan Sunggal,
                                Medan City, North Sumatra</p>
                            <a class="hover:text-amber-400">Get Directions</a>
                        </div>
                    </div>
                </div>
                <div class="lg:w-2/3 w-full px-1">
                    <iframe class="rounded-lg w-full h-full"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.0617694041757!2d98.64080877477662!3d3.573269550399568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312fced889a417%3A0xb1b67b3faf8c91e1!2sRumah%20Sakit%20Setiabudi%20(Orthopaedic%2C%20Spine%20and%20Surgery)!5e0!3m2!1sid!2sid!4v1746521880461!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 mt-5">

                <div class="w-full max-w-sm" data-src="assets/images/group/4.jpg">
                    <a><img src="assets/images/medan/4.jpg" class="w-full rounded-xl shadow-md"
                            alt="Santika Premiere Dyandra Hotel & Convention"></a>
                </div>
                <div class="w-full max-w-sm" data-src="assets/images/group/5.jpg">
                    <a><img src="assets/images/medan/5.jpg" class="w-full rounded-xl shadow-md"
                            alt="Santika Premiere Dyandra Hotel & Convention"></a>
                </div>
                <div class="w-full max-w-sm" data-src="assets/images/group/6.jpg">
                    <a><img src="assets/images/medan/6.jpg" class="w-full rounded-xl shadow-md"
                            alt="Santika Premiere Dyandra Hotel & Convention"></a>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    document.addEventListener('livewire:navigated', function() {
        const days = document.getElementById('days');
        const hours = document.getElementById('hours');
        const minutes = document.getElementById('minutes');
        const seconds = document.getElementById('seconds');

        // Check if all elements are found
        const elementsExist = days && hours && minutes && seconds;

        // If any element is missing, log a warning and return
        if (!elementsExist) {
            console.warn('One or more countdown elements not found.');
            return;
        }

        // Get current date and time
        const currentTime = new Date();

        // Set new date 30 days from now
        const targetTime = new Date("July 30, 2025 08:37:52").getTime();

        // Update countdown time
        function updateCountdown() {
            const currentTime = new Date();
            const diff = targetTime - currentTime;

            const d = Math.floor(diff / 1000 / 60 / 60 / 24);
            const h = Math.floor((diff / 1000 / 60 / 60) % 24);
            const m = Math.floor((diff / 1000 / 60) % 60);
            const s = Math.floor((diff / 1000) % 60);

            // Update elements if they exist
            if (days) days.innerHTML = d;
            if (hours) hours.innerHTML = h < 10 ? '0' + h : h;
            if (minutes) minutes.innerHTML = m < 10 ? '0' + m : m;
            if (seconds) seconds.innerHTML = s < 10 ? '0' + s : s;
        }

        // Call updateCountdown initially and set it to run every second
        updateCountdown();
        setInterval(updateCountdown, 1000);
        let valueDisplays = document.querySelectorAll(".num");
        let interval = 4000;

        valueDisplays.forEach((valueDisplay) => {
            let startValue = 0;
            let endValue = parseInt(valueDisplay.getAttribute("data-val"));
            let duration = Math.floor(interval / endValue);
            let counter = setInterval(function() {
                startValue += 1;
                valueDisplay.textContent = startValue;
                if (startValue == endValue) {
                    clearInterval(counter);
                }
            }, duration);
        });
    });
</script>