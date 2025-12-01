<div>
    <ul class="flex flex-col gap-2">
        @foreach ($importantDates as $date)
        <li class="border-b border-violet-900 pb-3">
            <a href="javascript:void"
                class="justify-between font-normal hover:text-[#7F3F80] ">
                {{$date->title}} : {{
                $date->date_end
                ? \Carbon\Carbon::parse($date->date)->format('l, d F') . ' - ' .
                \Carbon\Carbon::parse($date->date_end)->format('l, d F, Y')
                : \Carbon\Carbon::parse($date->date)->format('l, d F, Y')
                }}
            </a>
        </li>
        @endforeach
    </ul>
</div>