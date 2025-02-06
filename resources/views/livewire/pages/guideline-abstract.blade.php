<div>
    <section class="banner page-banner position-relative pb-0">
        <div class="overlay">
        </div>
        <div class="container">
            <div class="page-title text-center position-relative py-11">
                <h2 class="text-white text-uppercase">Submission</h2>
            </div>
        </div>
    </section>

    <section class="faq-popular-ques ">
        <div class="container">
            <div class="popular-ques">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="popular-ques-left me-4 m-sm-0">
                            <div class="section-title pb-4 text-center text-lg-start">
                                <p class="mb-1 kuning">Submission</p>
                                <h2 class="mb-">Guideline for <span class="kuning">Abstract</span></h2>
                                <p>Abstract Free Paper</p>
                            </div>
                            <div class="faq-accordion p-4 mb-6 bg-white shadow rounded">
                                <div class="accordion accordion-faq" id="accordionExample">
                                    @foreach ($guidelineAbstracts as $abstract)
                                    <div class="accordion-item ">
                                        <p class="accordion-header p-4">
                                            <button class="accordion-button fw-semibold p-0 text-uppercase collapsed"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#{{$abstract->id}}" aria-expanded="false"
                                                aria-controls="flush-{{$abstract->id}}">
                                                {{ $abstract->title }}
                                            </button>
                                        </p>
                                        <div id="{{$abstract->id}}" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body bg-lightgrey p-6">{!!
                                                str($abstract->description)->markdown()->sanitizeHtml() !!}</div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4  align-self-center">
                        <div class="faq-form bg-white rounded box-shadow p-6 ms-4 m-sm-0">
                            <div class="form-title mb-4">
                                <h2 class="mb-2"> Online <span class="kuning">Submission</span></h2>
                                <p class="m-0">*make sure the file complies with the guidelines.</p>
                            </div>
                            <div class="div d-grid">
                                <button class="btn mb-5"><i class="fa-solid fa-upload me-1"></i> Submit Abstract
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-general-ques pb-10 bg-lightgrey">
        <div class="container">
            <div class="general-ques">
                <div class="row">
                    <div class="col-lg-4 order-2 order-lg-1 p-2 align-self-center">
                        <div class="faq-form bg-white rounded box-shadow p-6 me-4 m-sm-0">
                            <div class="form-title mb-4">
                                <h2 class="mb-2"> Online <span class="kuning">Submission</span></h2>
                                <p class="m-0">*make sure the file complies with the guidelines.</p>
                            </div>
                            <div class="div d-grid">
                                <button class="btn3 mb-5"><i class="fa-solid fa-upload me-1"></i> Submit Abstract
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 order-1 order-lg-2 p-2">
                        <div class="general-ques-right mx-5">
                            <div class="section-title pb-4 text-center text-lg-start">
                                <p class="mb-1 kuning">Submission</p>
                                <h2 class="mb-2">Guideline for <span class="kuning">Abstract</span></h2>
                                <p>Abstract Video</p>
                            </div>
                            <div class="faq-accordion p-4 bg-white rounded border border-2 border-light-subtle">
                                <div class="accordion accordion-faq " id="accordionFlushExample">
                                    @foreach ($guidelineVideos as $video)
                                    <div class="accordion-item ">
                                        <p class="accordion-header p-4">
                                            <button class="accordion-button collapsed fw-semibold p-0" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#{{$video->id}}"
                                                aria-expanded="false" aria-controls="{{$video->id}}">
                                                {{$video->title}}
                                            </button>
                                        </p>
                                        <div id="{{$video->id}}" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body bg-lightgrey p-6">{!!
                                                str($video->description)->markdown()->sanitizeHtml() !!}</div>
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