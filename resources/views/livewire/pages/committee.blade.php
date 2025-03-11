<div class="w-full lg:w-11/12">
    <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-b from-[#470858]/80 to-[#9E1F63]/30"></div>

        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-white uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Organizing Committee
            </h2>
        </div>

    </section>

    <section class="mx-auto w-full px-5 pt-16 pb-28">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($uniqueCategories as $category)
            <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h2 class="text-xl font-semibold mb-2 text-amber-500 dark:text-amber-300 uppercase">{{$category}}</h2>
                @foreach ($committees as $committee)
                <ul class="list-disc list-inside text-gray-500 dark:text-white">
                    @if ($committee->category == $category)
                    <li>{{$committee->name}}</li>
                    @endif
                </ul>
                @endforeach
            </div>
            @endforeach
        </div>
    </section>
    <x-section.footer />
</div>