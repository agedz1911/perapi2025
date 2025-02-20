<div>
    <section class="banner page-banner position-relative pb-0">
        <div class="overlay">
        </div>
        <div class="container">
            <div class="page-title text-center position-relative py-11">
                <h2 class="text-white text-uppercase">Registration</h2>
            </div>
        </div>
    </section>

    <section class="price bg-lightgrey">
        <div class="container">
            <div class="price-inner">
                <div class="price-title mb-7 w-lg-60 m-auto text-center">
                    <h2 class="mb-1">Registration <span class="kuning">Symposium</span></h2>
                </div>
                <div class="price-options g-2 pb-6">
                    
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
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="relative">
                        <button class="btn mb-3 float-end"><i class="fa-solid fa-list mx-3"></i>Register Now!</button>
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
                                        {{-- @foreach ($guidelineAbstracts as $abstract) --}}
                                        <div class="accordion-item ">
                                            <p class="accordion-header p-4">
                                                <button
                                                    class="accordion-button fw-semibold p-0 text-uppercase collapsed"
                                                    type="button" data-bs-toggle="collapse" data-bs-target="#tes"
                                                    aria-expanded="false" aria-controls="flush-tes">
                                                    {{-- {{ $abstract->title }} --}} test
                                                </button>
                                            </p>
                                            <div id="tes" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body bg-lightgrey p-6">
                                                    tes
                                                    {{-- {!!str($abstract->description)->markdown()->sanitizeHtml() !!}
                                                    --}}
                                                </div>
                                            </div>
                                        </div>
                                        {{-- @endforeach --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>