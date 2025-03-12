<div class="w-full lg:w-11/12">
    <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-b from-[#470858]/80 to-[#9E1F63]/30"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-white uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Submission</h2>
        </div>
    </section>

    <section class="pt-10 pb-24 px-2 lg:px-5 text-gray-500">
        <div class="flex flex-col lg:flex-row gap-8 justify-between items-center">
            <div class="lg:w-2/3 w-full">
                <div class="">
                    <div class="text-center md:text-start mb-5">
                        <p class="mb-1 text-amber-500">Submission</p>
                        <h2 class="mb-0 uppercase text-4xl font-bold text-black/70 ">Guideline for <span
                                class="text-amber-500">Abstract</span></h2>
                        <!-- <p>Abstract Free Paper</p> -->
                    </div>

                    <div class="shadow-md rounded-xl">
                        <div id="accordion-color" data-accordion="collapse"
                            data-active-classes="bg-[#92278F] text-white" data-inactive-classes="bg-white text-black">
                            @foreach ($guidelineAbstracts as $abstract)
                            <h2 id="accordion-color-heading-{{$abstract->id}}">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-5 font-medium tracking-wide text-lg rtl:text-right text-gray-700 hover:text-white border border-b-0 border-gray-200 focus:ring-1 focus:ring-purple-200 hover:bg-purple-800 gap-3"
                                    data-accordion-target="#accordion-body-{{$abstract->id}}" aria-expanded="true"
                                    aria-controls="accordion-body-{{$abstract->id}}">
                                    <span>{{ $abstract->title }}</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-body-{{$abstract->id}}" class="hidden"
                                aria-labelledby="accordion-color-heading-{{$abstract->id}}">
                                <div class="p-5 border border-b-0 border-gray-200 bg-white">
                                    {!! str($abstract->description)->markdown()->sanitizeHtml() !!}
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/3">
                <div class="p-10 bg-white rounded-lg shadow-md ">
                    <div class="mb-4">
                        <h2 class="text-4xl font-semibold tracking-wide mb-2"> Online <span
                                class="text-amber-500">Submission</span></h2>
                        <p class="m-0 text-xs italic">*make sure the file complies with the guidelines.</p>
                    </div>
                    <div class="w-full flex text-center">
                        <a href="https://expo.virconex-id.com/abstract/perapi2025/index.php/upload_abstract"
                            class="w-full bg-purple-700 text-white py-2 rounded-xl hover:bg-purple-200 hover:text-gray-700"><i
                                class="fa-solid fa-upload me-1"></i> Submit Abstract
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-section.footer />
</div>