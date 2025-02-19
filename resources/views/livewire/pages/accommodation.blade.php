<div>
    <section class="banner page-banner position-relative pb-0">
        <div class="overlay">
        </div>
        <div class="container">
            <div class="page-title text-center position-relative py-11">
                <h2 class="text-white text-uppercase">Accommodation</h2>
            </div>
        </div>
    </section>

    <section class="shop">
        <div class="container">
            <div class="shop-inner">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-list me-6 m-md-0 pb-6">
                            <div class="section-title pb-4 text-center text-lg-start">
                                <h2 class="mb-2">Hotel <span class="kuning">Reservation</span></h2>
                                <p>The organizers of the ASMIUA congress have secured competitive rates at a variety of
                                    hotels near the Santika Premiere Dyandra Hotel & Convention to accommodate delegates
                                    with different budgets and preferences. Hotel reservations will open and are subject
                                    to availability. It is advisable to book your preferred hotel as soon as possible
                                </p>
                            </div>
                            <div class="product-left text-center">
                                <div class="row gy-4">
                                    @foreach ($accommodations as $accommodation)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="product-box p-3 pb-4 box-shadow rounded me-1 m-md-0">
                                            <div class="product-img mb-5 position-relative">
                                                {{-- menampilkan string HTML --}}
                                                {!! $accommodation->tag ? '<span
                                                    class="position-absolute translate-middle sale bg-blue rounded text-white py-2 px-4 align-self-center">
                                                    <small>' . $accommodation->tag . '</small>
                                                </span>' : " " !!}
                                                <a href="javascript:void(0)"><img
                                                        src="{{ asset('storage/' . $accommodation->image) }}"
                                                        alt="{{$accommodation->hotel_name}}" class="w-100 rounded"></a>
                                            </div>
                                            <div class="product-info mb-3">
                                                <h6 class="pb-2 black">{{$accommodation->hotel_name}}</h6>
                                                <div class="d-flex justify-content-center mb-3">
                                                    @for ($i = 1; $i <= 5; $i++) @if ($i <=$accommodation->hotel_star)
                                                        <i class="fa-solid fa-star kuning"></i>
                                                        @else
                                                        <i class="fa-solid fa-star"></i>
                                                        @endif
                                                        @endfor
                                                </div>
                                                <p class="mt-2 mb-3"><small><i
                                                            class="fa-solid text-success opacity-50 fa-circle-info"></i>
                                                        {{$accommodation->distance}}</small>
                                                </p>
                                                <div class="d-flex flex-column mb-5">
                                                    <small>Estimated Cost/Night</small>
                                                    <p class="text-success fw-semibold mb-0"><span
                                                            class="fw-normal">IDR</span>
                                                        {{number_format($accommodation->idr_price, 0, ',', '.')}}</p>
                                                    {{-- <p class="text-success fw-semibold"><span
                                                            class="fw-normal">USD</span>
                                                        {{$accommodation->usd_price}}</p> --}}
                                                </div>
                                            </div>
                                            <div class="add-to-cart-btn d-flex justify-content-evenly">
                                                <a href="{{$accommodation->url ? $accommodation->url : 'javascript:void(0)'}}"
                                                    class="btn px-5">Book Now</a>
                                                <a href="{{$accommodation->direction ? $accommodation->direction : 'javascript:void(0)'}}"
                                                    class="btn btn1 px-4"><i class="fa-solid fa-location-dot mx-1"></i>Direction</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>