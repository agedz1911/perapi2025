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


    <section class="bg-dark">
        <div class="container" style="height: 500px;">
            <div id="scheduler_here" class="dhx_cal_container mb-5">
                <div class="dhx_cal_navline">
                    <div class="dhx_cal_prev_button">&nbsp;</div>
                    <div class="dhx_cal_next_button">&nbsp;</div>
                    <div class="dhx_cal_today_button"></div>
                    <div class="dhx_cal_date"></div>
                    <div class="dhx_cal_tab" name="day_tab"></div>
                    <div class="dhx_cal_tab" name="week_tab"></div>
                    <div class="dhx_cal_tab" name="month_tab"></div>
                </div>
                <div class="dhx_cal_header"></div>
                <div class="dhx_cal_data"></div>
            </div>
            <!-- <div class="table-responsive mt-5">
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
                        {{-- @foreach ($times->groupBy('time') as $time => $atglancesByTime)
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
                        
                    </tbody>
                </table>
            </div> -->
        </div>
    </section>
</div>

@script
<script type="text/javascript">
    scheduler.init("scheduler_here");
</script>

<script type="text/javascript">
    scheduler.config.date_format = "%Y-%m-%d %H:%i:%s";
</script>
<script>
    scheduler.init("scheduler_here", new Date(2025, 11, 3), "week");
</script>
<script>
    scheduler.load("/api/data", "json");
</script>
@endscript