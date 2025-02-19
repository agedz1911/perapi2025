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

    <section class="faq-popular-ques">
        <div class="container">
            <div class="popular-ques">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="popular-ques-left me-4 m-sm-0">
                            <div class="section-title pb-4 text-center text-lg-start">
                                <p class="mb-1 kuning">Submission</p>
                                <h2 class="mb-0">Guideline for <span class="kuning">Abstract</span></h2>
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
                                <a href="https://expo.virconex-id.com/abstract/asmiua2025/upload_abstract" class="btn mb-5"><i class="fa-solid fa-upload me-1"></i> Submit Abstract
                                </a>
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
                                <p class="mb-0">*make sure the file complies with the guidelines.</p>
                            </div>
                            <div class="div d-grid">
                                <a href="https://expo.virconex-id.com/abstract/asmiua2025/upload_abstract" class="btn btn3 mb-5"><i class="fa-solid fa-upload me-1"></i> Submit Abstract
                                </a>
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
                            <div class="faq-accordion p-4 bg-white rounded border-2 border-light-subtle">
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

    <section class="faq-popular-ques">
        <div class="container">
            <div class="popular-ques">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="popular-ques-left me-4 m-sm-0">
                            <div class="section-title pb-4 text-center text-lg-start">
                                <p class="mb-1 kuning">Submission</p>
                                <h2 class="mb-0">Educative <span class="kuning">Flyer and Educative Video
                                        Competition</span> </h2>
                            </div>
                            <div class="faq-accordion p-4 mb-6 bg-white shadow rounded">
                                <div class="accordion accordion-faq" id="accordionExample">
                                    @foreach ($eduvideos as $eduvideo)
                                    <div class="accordion-item ">
                                        <p class="accordion-header p-4">
                                            <button class="accordion-button fw-semibold p-0 text-uppercase collapsed"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#{{$eduvideo->id}}"
                                                aria-expanded="false" aria-controls="flush-{{$eduvideo->id}}">
                                                {{$eduvideo->title}}
                                            </button>
                                        </p>
                                        <div id="{{$eduvideo->id}}" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body bg-lightgrey p-6">
                                                {!!str($eduvideo->description)->markdown()->sanitizeHtml() !!}
                                            </div>
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
                                <h2 class="mb-2"> Upload <span class="kuning">Video & Flyer</span></h2>
                                <small>*Instruction video or flyer submission <br>
                                    <span class="pink" type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"> Read More <i
                                            class="fa-solid fa-angles-right"></i></span></small>
                            </div>
                            <div class="div d-grid">
                                <a href="https://expo.virconex-id.com/submit_video/edu_video_asmiua2025/" class="btn mb-5"><i class="fa-solid fa-upload me-1"></i> Upload Video & Flyer
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Instruction video or flyer submission</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="">
                        <li>Save the video to be sent to online storage media or the Cloud (such as Google Drive,
                            OneDrive, ICloud, etc.)</li>
                        <li>Copy the video link that will be sent (provided access has a link to view the video) </li>
                        <li>Select upload video on the asmiua2025.org website page => submission => educative video &
                            flyer competition </li>
                        <li>Sign up by filling in the data on the page => "Go to Form Submit Educative Flyer & Video
                            Competition ASMIUA 2025" </li>
                        <li>Login using the email and password you created</li>
                        <li>In the add video link menu, enter the title of the video that will be in the competition and
                            paste the video link that was prepared earlier and select submit.</li>
                        <li>The email and password that has been created can be used again by participants to send more
                            than 1 video</li>

                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn1" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</div>