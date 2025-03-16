<div class="w-full lg:w-11/12">
    <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-b from-[#470858]/80 to-[#9E1F63]/30"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-white uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Registration</h2>
        </div>
    </section>

    <section class="pt-10 pb-24 px-2 lg:px-5 bg-competition">
        <!-- name of each tab group should be unique -->
        <div class="tabs tabs-border justify-evenly">
            <input type="radio" name="my_tabs_2" class="tab text-lg uppercase text-purple-700" aria-label="Indonesian Participant" checked="checked" />
            <div class="tab-content">
                <div class="pb-6 text-gray-500">
                    {{-- <span class="bg-amber-100 mt-5 text-amber-800 px-3 py-2 text-sm rounded-xl ">Indonesian Participants</span> --}}
                    @foreach ($uniqueLocals as $category)
                    <h2 class="uppercase font-semibold text-[#9E1F63] mb-2 mt-5">{{$category}}</h2>
                    <div class="relative overflow-x-auto shadow sm:rounded-lg ">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                            <thead class=" text-white uppercase text-center bg-purple-900 ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Category
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Early Bird Registration <br>
                                        up to 25 March 2025
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Late Registration <br>
                                        After 25 March up to 28 Jul 2025
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Onsite Registration
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($regLocals as $regLocal)
                                @if ($regLocal->category_reg == $category)
                                <tr class="bg-white border-b  border-gray-200 hover:bg-purple-50 ">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{$regLocal->title}}
                                    </th>
                                    <td class="px-6 py-4 text-center">
                                        IDR {{$regLocal->early_bird_reg != 0 ? number_format($regLocal->early_bird_reg, 0, ',', '.') : 'Free'}}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        IDR {{$regLocal->normal_reg != 0 ? number_format($regLocal->normal_reg, 0, ',', '.') : 'Free'}}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        IDR {{$regLocal->onsite_reg != 0 ? number_format($regLocal->onsite_reg, 0, ',', '.'): 'Free'}}
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                        <div class="relative mt-2">
                            <a href="https://expo.virconex-id.com/registration/perapi2025/" class="bg-amber-500 text-white hover:bg-purple-800 p-3 rounded-xl mb-3 float-end"><i class="fa-solid fa-list mx-3"></i>Register Now!</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <input type="radio" name="my_tabs_2" class="tab uppercase text-lg text-purple-700 " aria-label="Foreign Participant" />
            <div class="tab-content">
                <div class="pb-6 text-gray-500">
                    {{-- <span class="bg-amber-100 text-amber-800 px-3 py-2 text-sm rounded-xl mb-3">Foreign Participants</span> --}}
                    @foreach ($uniqueForeigns as $category)
                    <h2 class="uppercase font-semibold text-[#9E1F63] mb-2 mt-5">{{$category}}</h2>
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
                                        Late Registration <br>
                                        After 25 March up to 28 Jul 2025
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Onsite Registration
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($regForeigns as $regForeign)
                                @if ($regForeign->category_reg == $category)
                                <tr class="bg-white border-b  border-gray-200 hover:bg-purple-50 ">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{$regForeign->title}}
                                    </th>
                                    <td class="px-6 py-4 text-center">
                                        USD {{$regForeign->early_bird_reg != 0 ? $regForeign->early_bird_reg : 'Free'}}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        USD {{$regForeign->normal_reg != 0 ? $regForeign->normal_reg : 'Free'}}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        USD {{$regForeign->onsite_reg != 0 ? $regForeign->onsite_reg : 'Free'}}
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                        <div class="relative mt-2">
                            <a href="https://expo.virconex-id.com/registration/perapi2025/" class="bg-amber-500 text-white hover:bg-purple-800 p-3 rounded-xl mb-3 float-end"><i class="fa-solid fa-list mx-3"></i>Register Now!</a>
                        </div>
                    </div>
                    @endforeach
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

            <div>
                @foreach ($regInfos as $regInfo)
                <div class="collapse collapse-arrow bg-base-100 border border-base-300">
                    <input type="radio" name="my-accordion-2" />
                    <div class="collapse-title font-semibold">{{ $regInfo->title }}</div>
                    <div class="collapse-content text-sm text-gray-500">
                        {!!str($regInfo->description)->markdown()->sanitizeHtml() !!}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-section.footer />
</div>