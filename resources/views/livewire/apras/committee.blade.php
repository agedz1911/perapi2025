<div>
    <div class="">
        <section class=" relative pb-0">
            <div class="absolute inset-0 bg-gradient-to-l from-[#3C194F] via-[#3C194F] to-[#A93E89]"></div>

            <div class="py-16 lg:py-28 text-center relative">
                <h2 class="text-white uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Organizing Committee
                </h2>
            </div>

        </section>

        <section class="mx-auto w-full px-5 pt-16 pb-28 bg-competition">
            <div class="flex flex-wrap gap-4 justify-evenly">
                @foreach ($uniqueCategories as $category)
                <div class="card shadow-sm w-full max-w-xs">
                    <div class="card-body">
                        <h2 class="card-title text-[#9E1F63]">{{$category}}</h2>
                        @foreach ($committees as $committee)
                        @if ($committee->category == $category)
                        <ul class="list-disc list-inside">
                            <li class="mb-2">{{ $committee->name }}
                                @if ($committee->title != null)
                                <br>
                                <span class="font-semibold ml-3">({{ $committee->title }})</span>
                                @endif
                            </li>
                        </ul>
                        @endif
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>
</div>