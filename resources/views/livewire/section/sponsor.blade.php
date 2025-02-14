<div>
    <section class="banner page-banner position-relative pb-0">
        <div class="overlay">
        </div>
        <div class="container">
            <div class="page-title text-center position-relative py-11">
                <h2 class="text-white text-uppercase">Sponsors</h2>
            </div>
        </div>
    </section>

    <section class="partners">
        @foreach ($sponsors as $sponsor)
        <div class="container border-dashed-bottom-2 py-8">
            <div class="partner-inner">
                <div class="partner-title text-center pb-6 w-lg-60 m-auto">
                    @php
                    $category = $sponsor->category;
                    $words = explode(' ', $category);
                    if (count($words) > 1) {
                    $words[1] = '<span class="black">' . $words[1] . '</span>';
                    }
                    $formattedCategory = implode(' ', $words);
                    @endphp
                    <h2 class="mb-1 kuning">{!! $formattedCategory !!}</h2>
                </div>
                <div class="row row-cols-1 row-cols-lg-4 row-cols-md-4  gx-2 gx-lg-3 gx-md-3">
                    <div class="col p-0 border-start border-end border-sm-0">
                        <div class="p-2 partner-img-box text-center ">
                            <a href="{{$sponsor->website ? $sponsor->website : 'javascript:void(0)'}}" target="_blank">
                                {!! $sponsor->logo ? '<img src="' . asset('storage/' . $sponsor->logo) . '"
                                    class="img-fluid opacity-75" alt="' . $sponsor->company . '" />' : '<small
                                    class="text-center text-blue">' . $sponsor->company . '</small>' !!}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>
</div>