<div class="">
    <section class=" relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-l from-[#3C194F] via-[#3C194F] to-[#A93E89]"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-white uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Submission</h2>
            <p class="text-white text-sm italic font-semibold">“You Come Split Your Abstract in Two Events, And Get a Chance for Two Awards”</p>
        </div>
    </section>

    <section class="pt-10 pb-24 px-2 lg:px-5">
        <div class="flex flex-col lg:flex-row gap-8 justify-between items-center">
            <div class="lg:w-2/3 w-full">
                <div class="">
                    <div class="text-center md:text-start mb-5">
                        <p class="mb-1 text-amber-500">Submission</p>
                        <h2 class="mb-0 uppercase text-4xl font-bold">Guideline for <span
                                class="text-amber-500">Abstract</span></h2>
                        <!-- <p>Abstract Free Paper</p> -->
                    </div>

                    <div>
                        @foreach ($guidelineAbstracts as $abstract)
                        <div class="collapse collapse-plus bg-base-100 border border-base-300">
                            <input type="radio" name="my-accordion-3" />
                            <div class="collapse-title font-semibold">{{ $abstract->title }}</div>
                            <div class="collapse-content text-gray-500 text-sm">{!! str($abstract->description)->markdown()->sanitizeHtml() !!}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/3">
                <div class="p-10 bg-base-100 rounded-lg shadow-md ">
                    <div class="mb-4">
                        <h2 class="text-4xl font-semibold tracking-wide mb-2"> Online <span
                                class="text-amber-500">Submission</span></h2>
                        <p class="m-0 text-xs italic">*make sure the file complies with the guidelines.</p>
                    </div>
                    <div class="w-full flex text-center">
                        <a href="https://expo.virconex-id.com/abstract/apras-inapras2026/index.php/upload_abstract_sess" class="btn text-white bg-purple-700 hover:bg-[#9E1F63] w-full"><i class="fa-solid fa-upload me-1"></i> Submit Abstract</a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-10 pb-24 px-2 lg:px-5">
        <div class="text-center md:text-start mb-5">
            <p class="mb-0 uppercase text-lg text-amber-500">Conflict of Interest / Disclosure Statement</p>
            
        </div>
        <div class="mx-2 md:mx-10">
            <livewire:section.form-coi />
        </div>
    </section>

</div>