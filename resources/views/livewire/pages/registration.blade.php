<div class="w-full lg:w-11/12">
    <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-b from-[#470858]/80 to-[#9E1F63]/30"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-white uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Registration</h2>
        </div>
    </section>

    <section class="price bg-lightgrey">
        <div class="container">
            <div class="price-inner">
                <div class="price-title mb-7 w-lg-60 m-auto text-center">
                    <h2 class="mb-1">Registration <span class="kuning">Symposium</span></h2>
                </div>
                <div class="row">
                    <div class="price-options g-2 pb-6">
                        <span class="badge text-bg-warning px-3 rounded mb-3">Indonesian Participants</span>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead class="table-success text-center">
                                    <tr>
                                        <th scope="col" class="align-top">Category</th>
                                        <th scope="col" class="align-top">Early Bird Registration <br> up to 10 June 2025
                                        </th>
                                        <th scope="col" class="align-top">Regular Registration <br> After 10 June 2025</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($regLocals as $regLocal)
                                    <tr>
                                        <th scope="row">{{$regLocal->title}}</th>
                                        <td class="text-center">IDR {{number_format($regLocal->early_bird_reg, 0, ',', '.')}}</td>
                                        <td class="text-center">IDR {{number_format($regLocal->normal_reg, 0, ',', '.')}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="relative">
                            <a href="https://expo.virconex-id.com/registration/asmiua2025/" class="btn mb-3 float-end"><i class="fa-solid fa-list mx-3"></i>Register Now!</a>
                        </div>
                    </div>
                </div>

                <div class="price-options g-2 pb-6">
                    <span class="badge text-bg-primary px-3 rounded mb-3">Foreign Participants</span>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="table-secondary text-center">
                                <tr>
                                    <th scope="col" class="align-top">Category</th>
                                    <th scope="col" class="align-top">Early Bird Registration <br> up to 10 June 2025
                                    </th>
                                    <th scope="col" class="align-top">Regular Registration <br> After 10 June 2025</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($regForeigns as $regForeign)
                                <tr>
                                    <th scope="row">{{$regForeign->title}}</th>
                                    <td class="text-center">USD {{$regForeign->early_bird_reg}}</td>
                                    <td class="text-center">USD {{$regForeign->normal_reg}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="relative">
                        <a href="https://expo.virconex-id.com/registration/asmiua2025/" class="btn btn1 mb-3 float-end"><i class="fa-solid fa-list mx-3"></i>Register Now!</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="ticket2 position-relative">
        <div class="container">
            <div class="ticket-inner  text-center position-relative">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ticket-left text-lg-start pb-6">
                            <div class="ticket-title">
                                <h2 class="mb-2">Registration
                                    <span class="kuning d-inline-block">information</span>
                                </h2>
                            </div>
                            <div class="ticket-info">
                                <div class="faq-accordion p-4 mb-6 shadow rounded">
                                    <div class="accordion accordion-faq" id="accordionExample">
                                        @foreach ($regInfos as $regInfo)
                                        <div class="accordion-item ">
                                            <p class="accordion-header p-4">
                                                <button
                                                    class="accordion-button fw-semibold p-0 text-uppercase collapsed"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#{{$regInfo->id}}" aria-expanded="false"
                                                    aria-controls="flush-{{$regInfo->id}}">
                                                    {{ $regInfo->title }}
                                                </button>
                                            </p>
                                            <div id="{{$regInfo->id}}" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body bg-lightgrey p-6">
                                                    {!!str($regInfo->description)->markdown()->sanitizeHtml() !!}
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
        </div>
    </section>

    <x-section.footer />
</div>