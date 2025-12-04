<div class="">
    <section class=" relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-l from-[#3C194F] via-[#3C194F] to-[#A93E89]"></div>

        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-white uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Organizing Committee
            </h2>
        </div>

    </section>

    <section class="mx-auto w-full px-5 pt-16 pb-28 bg-competition">
        @foreach ($uniqueCategories as $category)
        <h2 class="text-center text-xl lg:text-2xl font-bold uppercase text-[#A93E89] mb-5 mt-5">{{$category}}</h2>
        <div class="flex flex-wrap gap-5 justify-center mb-10">
            @foreach ($committees as $committee)
            @if ($committee->category == $category)
            <div class="card bg-base-200 shadow-sm w-full max-w-xs">
                <figure class="avatar">
                    <img src="{{$committee->image ? asset('storage/' . $committee->image) : "
                                        ../assets/images/speaker-new.png"}}" alt="{{$committee->name}}"
                        class="w-full h-full rounded-lg">
                </figure>
                <div class="card-body items-center text-center">
                    <h2 class="card-title mb-0">
                        {{ $committee->name }}
                    </h2>
                    @if ($committee->title != null)
                    <div class="badge bg-[#A93E89] text-xs text-white mt-0">{{ $committee->title }}</div>
                    @endif
                </div>
            </div>
            @endif
            @endforeach
        </div>
        @endforeach
        
    </section>
</div>