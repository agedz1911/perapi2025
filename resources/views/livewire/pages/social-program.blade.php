<div class="w-full">
    <section class=" relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-l from-[#3C194F] via-[#3C194F] to-[#A93E89]"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-white uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Social Program</h2>
        </div>
    </section>

    <section class="pb-24 pt-10">
        <div class="px-2 lg:px-5">
            <div class="flex gap-2 flex-wrap w-full justify-around">
                @foreach ($tours as $tour)
                <label for="{{$tour->id}}" class="hover:shadow-xl hover:cursor-pointer">
                    <div class="card w-full max-w-sm shadow-sm rounded-lg">
                        <figure>
                            <img src="{{asset('storage/' . $tour->image)}}" alt="{{$tour->title}}" />
                        </figure>
                        <div class="card-body">
                            {{-- <span class="badge badge-xs bg-purple-700 text-white">Kategori</span> --}}
                            <div class="flex flex-wrap justify-between">
                                <h2 class="text-2xl font-bold">{{$tour->title}}</h2>
                            </div>
                            {!! str($tour->description)->markdown()->sanitizeHtml() !!}
                        </div>
                    </div>
                </label>
                <input type="checkbox" id="{{$tour->id}}" class="modal-toggle" />
                <div class="modal" role="dialog">
                    <div class="modal-box w-11/12 max-w-2xl">
                        <h3 class="text-lg font-bold">{{$tour->title}}</h3>
                        <figure>
                            <img src="{{asset('storage/' . $tour->image)}}" alt="{{$tour->title}}" />
                        </figure>
                        {!! str($tour->description)->markdown()->sanitizeHtml() !!}
                        <div class="modal-action">
                            <label for="{{$tour->id}}" class="btn">Close!</label>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="w-full flex justify-center mt-5">
                <div class="badge badge-soft bg-[#3C194F]/10 w-full max-w-4xl rounded-lg h-full md:p-2">
                    <div>
                        <p class="text-black">For further information, please contact: </p>
                        <div class="flex justify-between pt-2">
                            <a href="https://wa.me/+62081337314000" class="hover:underline hover:text-purple-400">
                                <i class="fa fa-whatsapp"></i> 0813-3731-4000
                                <p>Sudi</p>
                            </a>
                            <a href="htts://wa.me/+6281223674000" class="hover:underline hover:text-purple-400">
                                <i class="fa fa-whatsapp"></i> 0812-2367-4000
                                <p>Agus</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>