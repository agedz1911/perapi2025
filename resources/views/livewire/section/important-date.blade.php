<div>
    {{-- @dd($importantDates) --}}
    <div class="table-responsive">
        <table class="table text-primary">
            <tbody>
                @foreach ($importantDates as $date)
                <tr>
                    <td style="width: 50%;">
                        <p class="text-grey">{{$date->title}}</p>
                    </td>
                    <td>
                        <p class="text-grey"> {{\Carbon\Carbon::parse($date->date)->format('d F, Y')}}</p>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>