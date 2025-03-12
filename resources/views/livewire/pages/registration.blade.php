<div class="w-full lg:w-11/12">
    <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-b from-[#470858]/80 to-[#9E1F63]/30"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-white uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Registration</h2>
        </div>
    </section>

    <section class="pt-10 pb-24 px-2 lg:px-5 bg-competition">
        <div class="">
            <div class="mb-7 font-bold text-4xl text-center">
                <h2 class="mb-1 uppercase">Registration <span class="text-amber-500">Symposium</span></h2>
            </div>
            <div class="pb-6 text-gray-500">
                <span class="bg-purple-100 text-purple-800 px-3 py-2 text-sm rounded-xl mb-5">Indonesian Participants</span>
                <div class="relative overflow-x-auto shadow sm:rounded-lg mt-5">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                        <thead class=" text-white uppercase text-center bg-[#9E1F63] ">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Early Bird Registration <br>
                                    up to 25 March 2025
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Late / Onsite Registration <br>
                                    After 25 March 2025
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($regLocals as $regLocal)
                            <tr class="bg-white border-b  border-gray-200 hover:bg-purple-50 ">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{$regLocal->title}}
                                </th>
                                <td class="px-6 py-4 text-center">
                                    IDR {{number_format($regLocal->early_bird_reg, 0, ',', '.')}}
                                </td>
                                <td class="px-6 py-4 text-center">
                                    IDR {{number_format($regLocal->normal_reg, 0, ',', '.')}}
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="relative mt-2">
                    <a href="https://expo.virconex-id.com/registration/perapi2025/" class="bg-amber-500 text-white hover:bg-purple-800 p-3 rounded-xl mb-3 float-end"><i class="fa-solid fa-list mx-3"></i>Register Now!</a>
                </div>
            </div>

            <div class="mt-7 pb-6 text-gray-500">
                <span class="bg-purple-100 text-purple-800 px-3 py-2 text-sm rounded-xl mb-3">Foreign Participants</span>
                <div class="relative overflow-x-auto shadow sm:rounded-lg mt-5">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                        <thead class=" text-white uppercase text-center bg-[#9E1F63] ">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Early Bird Registration <br>
                                    up to 25 March 2025
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Late / Onsite Registration <br>
                                    After 25 March 2025
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($regForeigns as $regForeign)
                            <tr class="bg-white border-b  border-gray-200 hover:bg-purple-50 ">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{$regForeign->title}}
                                </th>
                                <td class="px-6 py-4 text-center">
                                    IDR {{$regForeign->early_bird_reg}}
                                </td>
                                <td class="px-6 py-4 text-center">
                                    IDR {{$regForeign->normal_reg}}
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="relative mt-2">
                    <a href="https://expo.virconex-id.com/registration/perapi2025/" class="bg-amber-500 text-white hover:bg-purple-800 p-3 rounded-xl mb-3 float-end"><i class="fa-solid fa-list mx-3"></i>Register Now!</a>
                </div>
            </div>
        </div>
    </section>

    <section class="px-2 lg:px-5 pb-16 bg-competition border-t border-dashed border-gray-200">
        <div class=" mt-10">
            <div class="text-center lg:text-start">
                <h2 class="mb-2 uppercase text-3xl font-semibold">Registration
                    <span class="text-amber-500">information</span>
                </h2>
            </div>

            <div class="px-3 py-5 bg-white rounded-xl mt-3">
                @foreach ($regInfos as $regInfo)
                <div id="accordion-color" data-accordion="open" data-active-classes="bg-[#92278F] text-white">
                    <h2 id="accordion-heading-{{$regInfo->id}}">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 hover:text-white border border-b-0 border-gray-300 rounded-lg focus:ring-1 focus:ring-blue-200 hover:bg-purple-800 gap-3"
                            data-accordion-target="#accordion-body-{{$regInfo->id}}" aria-expanded="true"
                            aria-controls="accordion-body-{{$regInfo->id}}">
                            <span>{{ $regInfo->title }}</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-body-{{$regInfo->id}}" class="hidden"
                        aria-labelledby="accordion-heading-{{$regInfo->id}}">
                        <div class="p-5 text-gray-500">
                            {!!str($regInfo->description)->markdown()->sanitizeHtml() !!}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-section.footer />
</div>