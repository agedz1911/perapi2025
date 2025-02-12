<div>
    <section class="banner page-banner position-relative pb-0">
        <div class="overlay">
        </div>
        <div class="container">
            <div class="page-title text-center position-relative py-11">
                <h2 class="text-white text-uppercase">Program at Glance</h2>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="table-responsive mt-5">
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th scope="col" style="width: 8%;"></th>
                            <th scope="col">Room 1</th>
                            <th scope="col">Room 2</th>
                            <th scope="col">Room 3</th>

                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($atglances->groupBy('time') as $time => $atglancesByTime)
                        <tr>
                            <th scope="row">{{$time}}</th>
                            @foreach ($atglancesByTime as $atGlance)

                            <td rowspan="{{$atGlance->rowspan}}"
                                class="align-middle text-bg-{{$atGlance->status}} rounded">
                                <span class="d-block text-center">{{$atGlance->title}}</span>
                            </td>
                            @endforeach
                        </tr>
                        @endforeach --}}
                        @foreach ($times as $time)

                        <tr>

                            <th scope="row">{{ $time->time }}</th>

                            @if ($time->atGlances->isEmpty())

                            <td colspan="3" class="text-center">Tidak ada jadwal</td>

                            @else

                            @foreach ($time->atGlances as $atGlance)

                            @if ($loop->first)

                            <td rowspan="{{ $time->atGlances->count() }}"
                                class="align-middle text-bg-secondary rounded">

                                <span class="d-block text-center">{{ $atGlance->title }} {{ $atGlance->room }}</span>

                            </td>

                            @endif

                            @endforeach

                            @endif

                        </tr>

                        @foreach ($time->atGlances as $atGlance)

                        @if (!$loop->first)

                        <tr>

                            <th scope="row">{{ $time->time }}</th>

                            <td class="align-middle text-bg-secondary rounded">

                                <span class="d-block text-center">{{ $atGlance->title }} {{ $atGlance->room }}</span>

                            </td>

                        </tr>

                        @endif

                        @endforeach

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>